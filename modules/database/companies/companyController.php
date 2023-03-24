<?php

require_once "./modules/database/db.php";
require_once "./modules/database/companies/companyModel.php";
require_once "./modules/applyJsonMergePatch.php";

use MongoDB\Collection;

class CompanyController
{
    private Collection $collection;

    public function __construct()
    {
        global $dbClient;
        $this->collection = $dbClient->selectCollection("projetweb", "companys");
    }

    public function get(string $id): ?Company
    {
        return Company::createFromDataArray($this->collection->findOne(['id' => $id]));
    }

    public function getWithFilter(array $filter): ?array
    {
        $result = $this->collection->find($filter)->toArray();
        if (empty($result))
            return null;
        return array_map(function ($item) {
            return Company::createFromDataArray($item);
        }, $result);
    }

    public function getAll(): array
    {
        $result = $this->collection->find()->toArray();
        return array_map(function ($item) {
            return Company::createFromDataArray($item);
        }, $result);
    }

    public function create(array $companyData): bool
    {
        if (!Company::isValidCompanyArray($companyData)) {
            return false;
        }
        $companyData = Company::cleanData($companyData);
        $result = $this->collection->insertOne($companyData);
        return $result->getInsertedCount() === 1;
    }

    public function update(string $id, array $jsonPatch): bool
    {
        $document = $this->collection->findOne(['id' => $id]);

        if ($document === null) {
            return false;
        }

        $newDocument = applyJsonMergePatch($document, $jsonPatch);

        if (!Company::isValidCompanyArray($newDocument)) {
            return false;
        }

        $newDocument = Company::cleanData($newDocument);

        $result = $this->collection->replaceOne(['id' => $id], $newDocument);
        return $result > 0;
    }

    public function delete(string $id): bool
    {
        $result = $this->collection->deleteOne(['id' => $id]);
        return $result->getDeletedCount() === 1;
    }
}