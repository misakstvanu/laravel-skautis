<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RegistryAllMinistryOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $iC = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $unitOld = null,
        public readonly ?string $streetOld = null,
        public readonly ?string $cityOld = null,
        public readonly ?string $postcodeOld = null,
        public readonly ?string $idRegistryType = null,
        public readonly ?string $registryType = null,
        public readonly ?string $dateCreate = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            iC: isset($obj->{'IC'}) ? (string) $obj->{'IC'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            unitOld: isset($obj->{'UnitOld'}) ? (string) $obj->{'UnitOld'} : null,
            streetOld: isset($obj->{'StreetOld'}) ? (string) $obj->{'StreetOld'} : null,
            cityOld: isset($obj->{'CityOld'}) ? (string) $obj->{'CityOld'} : null,
            postcodeOld: isset($obj->{'PostcodeOld'}) ? (string) $obj->{'PostcodeOld'} : null,
            idRegistryType: isset($obj->{'ID_RegistryType'}) ? (string) $obj->{'ID_RegistryType'} : null,
            registryType: isset($obj->{'RegistryType'}) ? (string) $obj->{'RegistryType'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
        );
    }
}
