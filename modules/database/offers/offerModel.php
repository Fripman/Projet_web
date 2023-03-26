<?php

class Offer
{
    public string $id;
    public int $duration;
    public DateTime $creationDate;
    public int $currentPlaces;
    public int $remunerationBasis;
    public string $companyId;
    public array $localisations;
    public array $concernedPromos;
    public array $expectedSkills;

    public function __construct(
        string $id,
        int $duration,
        int $creationDate,
        int $currentPlaces,
        int $remunerationBasis,
        string $companyId,
        array $localisations,
        array $concernedPromos,
        array $expectedSkills
    ) {
        $this->id = $id;
        $this->duration = $duration;
        $this->creationDate = DateTime::createFromFormat('U', $creationDate);
        $this->currentPlaces = $currentPlaces;
        $this->remunerationBasis = $remunerationBasis;
        $this->companyId = $companyId;
        $this->localisations = $localisations;
        $this->concernedPromos = $concernedPromos;
        $this->expectedSkills = $expectedSkills;
    }

    public static function createFromDataArray(array $data): self
    {
        return new self(
            $data['id'],
            $data['duration'],
            $data['creationDate'],
            $data['currentPlaces'],
            $data['remunerationBasis'],
            $data['companyId'],
            $data['localisations'],
            $data['concernedPromos'],
            $data['expectedSkills']
        );
    }
    static function isValidOfferArray(array $data): bool
    {
        // Vérification des propriétés principales
        $expectedProperties = [
            'id' => 'string',
            'duration' => 'integer',
            'creationDate' => 'integer',
            'currentPlaces' => 'integer',
            'remunerationBasis' => 'integer',
            'companyId' => 'string',
            'localisations' => 'array',
            'concernedPromos' => 'array',
            'expectedSkills' => 'array',
        ];

        foreach ($expectedProperties as $key => $type) {
            if (!isset($data[$key])) {
                return false;
            }

            if (gettype($data[$key]) !== $type) {
                return false;
            }
        }

        // Vérification de la propriété localisations
        $expectedLocalisations = [
            'street' => 'string',
            'city' => 'string',
            'ZIPCode' => 'string',
            'country' => 'string',
        ];

        if (count($data['localisations']) < 1) {
            return false;
        }

        foreach ($data['localisations'] as $localisation) {
            foreach ($expectedLocalisations as $key => $type) {
                if (!isset($localisation[$key])) {
                    return false;
                }

                if (gettype($localisation[$key]) !== $type) {
                    return false;
                }
            }
        }

        // Vérification de la propriété concernedPromos
        $expectedConcernedPromos = [
            'year' => 'integer',
            'type' => 'string',
        ];

        if (count($data['concernedPromos']) < 1) {
            return false;
        }

        foreach ($data['concernedPromos'] as $concernedPromo) {
            foreach ($expectedConcernedPromos as $key => $type) {
                if (!isset($concernedPromo[$key])) {
                    return false;
                }

                if (gettype($concernedPromo[$key]) !== $type) {
                    return false;
                }

                if ($key == "year" && !!in_array($concernedPromo["year"], range(1, 5))) {
                    return false;
                }

                if ($key == "type" && !in_array($concernedPromo["type"], ["Général", "BTP", "Info", "S3E"])) {
                    return false;
                }
            }
        }

        // Vérification de la propriété expectedSkills
        $expectedExpectedSkills = [
            'name' => 'string',
        ];

        if (count($data['expectedSkills']) < 1) {
            return false;
        }

        foreach ($data['expectedSkills'] as $expectedSkill) {
            foreach ($expectedExpectedSkills as $key => $type) {
                if (!isset($expectedSkill[$key])) {
                    return false;
                }

                if (gettype($expectedSkill[$key]) !== $type) {
                    return false;
                }
            }
        }

        return true;
    }
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'duration' => $this->duration,
            'creationDate' => $this->creationDate->getTimestamp(),
            'currentPlaces' => $this->currentPlaces,
            'remunerationBasis' => $this->remunerationBasis,
            'companyId' => $this->companyId,
            'localisations' => $this->localisations,
            'concernedPromos' => $this->concernedPromos,
            'expectedSkills' => $this->expectedSkills
        ];
    }

    static function cleanData(array $data): array
    {
        if (self::isValidOfferArray($data)) {
            $cleanLocalisations = [];
            foreach ($data['localisations'] as $localisation) {
                $cleanLocalisation = [
                    "street" => $localisation["street"],
                    "city" => $localisation["city"],
                    "ZIPCode" => $localisation["ZIPCode"],
                    "country" => $localisation["country"]
                ];

                $cleanLocalisations[] = $cleanLocalisation;
            }
            $data["localisations"] = $cleanLocalisations;

            $cleanConcernedPromos = [];
            foreach ($data['concernedPromos'] as $concernedPromo) {
                $cleanConcernedPromo = [
                    "year" => $concernedPromo["year"],
                    "type" => $concernedPromo["type"]
                ];

                $cleanConcernedPromos[] = $cleanConcernedPromo;
            }
            $data["concernedPromos"] = $cleanConcernedPromos;

            $cleanExpectedSkills = [];
            foreach ($data['expectedSkills'] as $expectedSkill) {
                $cleanExpectedSkill = [
                    "name" => $expectedSkill["name"]
                ];

                $cleanExpectedSkills[] = $cleanExpectedSkill;
            }
            $data["expectedSkills"] = $cleanExpectedSkills;
        }
        return self::createFromDataArray($data)->toArray();
    }
}