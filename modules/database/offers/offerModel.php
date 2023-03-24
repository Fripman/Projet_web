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
        ;
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

        if (!isset($data['localisations'])) {
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

        if (!isset($data['concernedPromos'])) {
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
            }
        }

        // Vérification de la propriété expectedSkills
        $expectedExpectedSkills = [
            'name' => 'string',
        ];

        if (!isset($data['expectedSkills'])) {
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
        return self::createFromDataArray($data)->toArray();
    }
}