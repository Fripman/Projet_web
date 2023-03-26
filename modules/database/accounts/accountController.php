<?php

require_once "./modules/database/db.php";
require_once "./modules/database/accounts/accountModel.php";
require_once "./modules/applyJsonMergePatch.php";
require_once "./modules/generateId.php";
require_once "./modules/passwordGestion.php";

use MongoDB\Collection;

class AccountController
{
    private Collection $collection;

    public function __construct()
    {
        global $dbClient;
        $this->collection = $dbClient->selectCollection("projetweb", "accounts");
    }

    public function get(string $id): ?Account
    {
        print_r($id);
        $result = $this->collection->findOne(['id' => $id]);
        print_r($result);
        return $result ? Account::createFromDataArray(json_decode(json_encode($result), true)) : null;
    }

    public function getWithFilter(array $filter): ?array
    {
        $result = $this->collection->find($filter)->toArray();
        if (empty($result))
            return null;
        return array_map(function ($item) {
            return Account::createFromDataArray(json_decode(json_encode($item), true));
        }, $result);
    }

    public function getAll(): array
    {
        $result = $this->collection->find()->toArray();
        return array_map(function ($item) {
            return Account::createFromDataArray(json_decode(json_encode($item), true));
        }, $result);
    }

    public function create(array $accountData): bool
    {
        $accountData["id"] = generateId();
        if (isset($accountData["password"])) {
            $hashPasswordData = createPassword($accountData["password"]);
            $accountData["salt"] = $hashPasswordData["salt"];
            $accountData["hash"] = $hashPasswordData["hash"];
        } else {
            return false;
        }
        if (!Account::isValidOfferArray($accountData)) {
            return false;
        }

        $accountData = Account::cleanData($accountData);
        $result = $this->collection->insertOne($accountData);
        return $result->getInsertedCount() === 1;
    }

    public function update(string $id, array $jsonPatch): bool
    {
        $document = $this->collection->findOne(['id' => $id]);

        if ($document === null) {
            return false;
        }

        $newDocument = applyJsonMergePatch(json_decode(json_encode($document), true), $jsonPatch);
        $newDocument["id"] = $document["id"];

        if (!Account::isValidOfferArray($newDocument)) {
            return false;
        }

        $newDocument = Account::cleanData($newDocument);

        $result = $this->collection->replaceOne(['id' => $id], $newDocument);
        return $result->getModifiedCount() > 0;
    }

    public function delete(string $id): bool
    {
        $result = $this->collection->deleteOne(['id' => $id]);
        return $result->getDeletedCount() === 1;
    }
}