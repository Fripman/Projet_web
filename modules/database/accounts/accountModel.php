<?php

class Account
{
    public string $id;
    public string $username;
    public string $salt;
    public string $hash;
    public string $permissions;
    public string $name;
    public string $surname;
    public string $center;
    public array $promos;
    public array $wishlist;
    public array $offerPostulations;
    public array $postulationNotifications;

    public function __construct(
        string $id,
        string $username,
        string $salt,
        string $hash,
        string $permissions,
        string $name,
        string $surname,
        string $center,
        array $promos,
        array $wishlist,
        array $offerPostulations,
        array $postulationNotifications
    ) {
        $this->id = $id;
        $this->username = $username;
        $this->salt = $salt;
        $this->hash = $hash;
        $this->permissions = $permissions;
        $this->name = $name;
        $this->surname = $surname;
        $this->center = $center;
        $this->promos = $promos;
        $this->wishlist = $wishlist;
        $this->offerPostulations = $offerPostulations;
        $this->postulationNotifications = $postulationNotifications;
    }

    public static function createFromDataArray(array $data): self
    {
        return new self(
            $data['id'],
            $data['username'],
            $data['salt'],
            $data['hash'],
            $data['permissions'],
            $data['name'],
            $data['surname'],
            $data['center'],
            $data['promos'],
            $data['wishlist'],
            $data['offerPostulations'],
            $data['postulationNotifications']
        );
    }
    static function isValidOfferArray(array $data): bool
    {
        // Vérification des propriétés principales
        $expectedProperties = [
            'id' => 'string',
            'username' => 'string',
            'salt' => 'string',
            'hash' => 'string',
            'permissions' => 'string',
            'name' => 'string',
            'surname' => 'string',
            'center' => 'string',
            'promos' => 'array',
            'wishlist' => 'array',
            'offerPostulations' => 'array',
            'postulationNotifications' => 'array',
        ];

        foreach ($expectedProperties as $key => $type) {
            if (!isset($data[$key])) {
                echo 4;
                return false;
            }

            if (gettype($data[$key]) !== $type) {
                echo 5;
                return false;
            }
        }

        if (!in_array($data["permissions"], ["student", "pilot", "admin"])) {
            echo 6;
            return false;
        }

        // Vérification de la propriété promos
        $expectedPromos = [
            'promoId' => 'string',
            'year' => 'integer',
            'type' => 'string'
        ];

        if ($data['permissions'] == "student" && count($data['promos']) != 1) {
            echo 7;
            return false;
        }

        if ($data['permissions'] == "pilot" && count($data['promos']) < 1) {
            echo 8;
            return false;
        }

        foreach ($data['promos'] as $promo) {
            foreach ($expectedPromos as $key => $type) {
                if (!isset($promo[$key])) {
                    echo 9;
                    return false;
                }

                if (gettype($promo[$key]) !== $type) {
                    echo 10;
                    return false;
                }
            }

            if ($key == "year" && !in_array($promo["year"], range(1, 5))) {
                echo 11;
                return false;
            }

            if ($key == "type" && !in_array($promo["type"], ["Général", "BTP", "Info", "S3E"])) {
                echo 12;
                return false;
            }
        }

        // Vérification de la propriété wishlist
        $expectedWishlist = [
            'offerId' => 'string',
        ];

        foreach ($data['wishlist'] as $wishlist) {
            foreach ($expectedWishlist as $key => $type) {
                if (!isset($wishlist[$key])) {
                    echo 13;
                    return false;
                }

                if (gettype($wishlist[$key]) !== $type) {
                    echo 14;
                    return false;
                }
            }
        }

        // Vérification de la propriété offerPostulations
        $expectedOfferPostulations = [
            'offerId' => 'string',
            'isFinished' => 'boolean'
        ];

        foreach ($data['offerPostulations'] as $offerPostulation) {
            foreach ($expectedOfferPostulations as $key => $type) {
                if (!isset($offerPostulation[$key])) {
                    echo 15;
                    return false;
                }

                if (gettype($offerPostulation[$key]) !== $type) {
                    echo 16;
                    return false;
                }
            }
        }

        // Vérification de la propriété postulationNotifications
        $expectedPostulationNotifications = [
            'studentId' => 'string',
            'offerId' => 'string'
        ];

        foreach ($data['postulationNotifications'] as $postulationNotification) {
            foreach ($expectedPostulationNotifications as $key => $type) {
                if (!isset($postulationNotification[$key])) {
                    echo 17;
                    return false;
                }

                if (gettype($postulationNotification[$key]) !== $type) {
                    echo 18;
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
            'username' => $this->username,
            'salt' => $this->salt,
            'hash' => $this->hash,
            'permissions' => $this->permissions,
            'name' => $this->name,
            'surname' => $this->surname,
            'center' => $this->center,
            'promos' => $this->promos,
            'wishlist' => $this->wishlist,
            'offerPostulations' => $this->offerPostulations,
            'postulationNotifications' => $this->postulationNotifications
        ];
    }

    static function cleanData(array $data): array
    {
        if (self::isValidOfferArray($data)) {
            if ($data["permissions"] == "student") {
                $data["postulationNotifications"] = [];
            }
            if ($data["permissions"] == "pilot") {
                $data["wishlist"] = [];
                $data["offerPostulations"] = [];
            }

            $cleanPromos = [];
            foreach ($data['promos'] as $promo) {
                $cleanPromo = [
                    "promoId" => $promo["promoId"],
                    "year" => $promo["year"],
                    "type" => $promo["type"]
                ];

                $cleanPromos[] = $cleanPromo;
            }
            $data["promos"] = $cleanPromos;

            $cleanWishlist = [];
            foreach ($data['wishlist'] as $wishlistElement) {
                $cleanWishlistElement = [
                    "offerId" => $wishlistElement["offerId"]
                ];

                $cleanWishlist[] = $cleanWishlistElement;
            }
            $data["wishlist"] = $cleanWishlist;

            $cleanOfferPostulations = [];
            foreach ($data['offerPostulations'] as $offerPostulation) {
                $cleanOfferPostulation = [
                    "offerId" => $offerPostulation["offerId"],
                    "isFinished" => $offerPostulation["isFinished"]
                ];

                $cleanOfferPostulations[] = $cleanOfferPostulation;
            }
            $data["offerPostulations"] = $cleanOfferPostulations;

            $cleanPostulationNotifications = [];
            foreach ($data['postulationNotifications'] as $postulationNotification) {
                $cleanPostulationNotification = [
                    "studentId" => $postulationNotification["studentId"],
                    "offerId" => $postulationNotification["offerId"]
                ];

                $cleanPostulationNotifications[] = $cleanPostulationNotification;
            }
            $data["postulationNotifications"] = $cleanPostulationNotifications;

        }
        return self::createFromDataArray($data)->toArray();
    }
}