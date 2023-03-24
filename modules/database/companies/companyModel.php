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
    )
    {
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

        // Vérification de la propriété pilotEvaluation
        $expectedPilotEvaluation = [
            'rating' => 'integer',
            'comment' => 'string',
        ];

        if (!isset($data['pilotEvaluation'])) {
            return false;
        }

        foreach ($expectedPilotEvaluation as $key => $type) {
            if (!isset($data['pilotEvaluation'][$key])) {
                return false;
            }

            if (gettype($data['pilotEvaluation'][$key]) !== $type) {
                return false;
            }
        }

        // Vérification de la propriété internEvaluations
        $expectedInternEvaluation = [
            'studentId' => 'string',
            'rating' => 'integer',
            'comment' => 'string',
        ];

        if (!isset($data['internEvaluations'])) {
            return false;
        }

        foreach ($data['internEvaluations'] as $evaluation) {
            foreach ($expectedInternEvaluation as $key => $type) {
                if (!isset($evaluation[$key])) {
                    return false;
                }

                if (gettype($evaluation[$key]) !== $type) {
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
        return self::createFromDataArray($data)->toArray();
    }
}