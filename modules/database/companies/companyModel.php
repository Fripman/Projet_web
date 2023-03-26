<?php

class Company
{
    public string $id;
    public string $name;
    public string $activitySector;
    public bool $visible;
    public string $contactEmail;
    public array $localisations;
    public array $pilotEvaluation;
    public string $pilotId;
    public int $acceptedInternNb;
    public array $internEvaluations;

    public function __construct(
        string $id,
        string $name,
        string $activitySector,
        bool $visible,
        string $contactEmail,
        array $localisations,
        array $pilotEvaluation,
        string $pilotId,
        int $acceptedInternNb,
        array $internEvaluations
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->activitySector = $activitySector;
        $this->visible = $visible;
        $this->contactEmail = $contactEmail;
        $this->localisations = $localisations;
        $this->pilotEvaluation = $pilotEvaluation;
        $this->pilotId = $pilotId;
        $this->acceptedInternNb = $acceptedInternNb;
        $this->internEvaluations = $internEvaluations;
    }
    public static function createFromDataArray(array $data): self
    {
        return new self(
            $data['id'],
            $data['name'],
            $data['activitySector'],
            $data['visible'],
            $data['contactEmail'],
            $data['localisations'],
            $data['pilotEvaluation'],
            $data['pilotId'],
            $data['acceptedInternNb'],
            $data['internEvaluations']
        );
    }
    static function isValidCompanyArray(array $data): bool
    {
        // Vérification des propriétés principales
        $expectedProperties = [
            'id' => 'string',
            'name' => 'string',
            'activitySector' => 'string',
            'visible' => 'boolean',
            'contactEmail' => 'string',
            'localisations' => 'array',
            'pilotEvaluation' => 'array',
            'pilotId' => 'string',
            'acceptedInternNb' => 'integer',
            'internEvaluations' => 'array',
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

        // Vérification de la propriété pilotEvaluation
        $expectedPilotEvaluation = [
            'rating' => 'integer',
            'comment' => 'string',
        ];

        foreach ($expectedPilotEvaluation as $key => $type) {
            if (!isset($data['pilotEvaluation'][$key])) {
                return false;
            }

            if (gettype($data['pilotEvaluation'][$key]) !== $type) {
                return false;
            }
        }

        // Vérification de la propriété internEvaluations
        $expectedInternEvaluations = [
            'studentId' => 'string',
            'rating' => 'integer',
            'comment' => 'string',
        ];

        foreach ($data['internEvaluations'] as $internEvaluation) {
            foreach ($expectedInternEvaluations as $key => $type) {
                if (!isset($internEvaluation[$key])) {
                    return false;
                }

                if (gettype($internEvaluation[$key]) !== $type) {
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
            'name' => $this->name,
            'activitySector' => $this->activitySector,
            'visible' => $this->visible,
            'contactEmail' => $this->contactEmail,
            'localisations' => $this->localisations,
            'pilotEvaluation' => $this->pilotEvaluation,
            'pilotId' => $this->pilotId,
            'acceptedInternNb' => $this->acceptedInternNb,
            'internEvaluations' => $this->internEvaluations,
        ];
    }

    static function cleanData(array $data): array
    {
        if (self::isValidCompanyArray($data)) {
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

            $data["pilotEvaluation"] = [
                "rating" => $data["pilotEvaluation"]["rating"],
                "comment" => $data["pilotEvaluation"]["comment"]
            ];

            $cleanInternEvaluations = [];
            foreach ($data['internEvaluations'] as $internEvaluation) {
                $cleanInternEvaluation = [
                    "studentId" => $internEvaluation["studentId"],
                    "rating" => $internEvaluation["rating"],
                    "comment" => $internEvaluation["comment"]
                ];

                $cleanInternEvaluations[] = $cleanInternEvaluation;
            }
            $data["internEvaluations"] = $cleanInternEvaluations;
        }
        return self::createFromDataArray($data)->toArray();
    }
}