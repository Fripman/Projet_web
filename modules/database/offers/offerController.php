<?php

require_once "./modules/database/db.php";
require_once "./modules/database/offers/offerModel.php";
require_once "./modules/applyJsonMergePatch.php";

use MongoDB\Collection;

class OfferController
{
    private Collection $collection;

    public function __construct()
    {
        global $dbClient;
        $this->collection = $dbClient->selectCollection("projetweb", "offers");
    }

    public function get(string $id): ?Offer
    {
        $result = $this->collection->findOne(['id' => $id]);
        return $result ? Offer::createFromDataArray(json_decode(json_encode($result), true)) : null;
    }

    public function getWithFilter(array $filter): ?array
    {
        $result = $this->collection->find($filter)->toArray();
        if (empty($result))
            return null;
        return array_map(function ($item) {
            return Offer::createFromDataArray(json_decode(json_encode($item), true));
        }, $result);
    }

    public function getAll(): array
    {
        $result = $this->collection->find()->toArray();
        return array_map(function ($item) {
            return Offer::createFromDataArray(json_decode(json_encode($item), true));
        }, $result);
    }

    public function create(array $offerData): bool
    {
        if (!Offer::isValidOfferArray($offerData)) {
            return false;
        }

        $offerData = Offer::cleanData($offerData);
        $result = $this->collection->insertOne($offerData);
        return $result->getInsertedCount() === 1;
    }

    public function update(string $id, array $jsonPatch): bool
    {
        $document = $this->collection->findOne(['id' => $id]);

        echo 1;

        if ($document === null) {
            echo 2;
            return false;
        }

        $newDocument = applyJsonMergePatch(json_decode(json_encode($document), true), $jsonPatch);

        if (!Offer::isValidOfferArray($newDocument)) {
            echo 3;
            return false;
        }

        $newDocument = Offer::cleanData($newDocument);

        $result = $this->collection->replaceOne(['id' => $id], $newDocument);
        return $result > 0;
    }

    public function delete(string $id): bool
    {
        $result = $this->collection->deleteOne(['id' => $id]);
        return $result->getDeletedCount() === 1;
    }
}