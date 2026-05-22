<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationAllRealtyCollectionOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?string $unit = null,
        public readonly ?int $idRealtyCollection = null,
        public readonly ?string $realtyCollection = null,
        public readonly ?int $idRealtyType = null,
        public readonly ?string $realtyType = null,
        public readonly ?bool $canBeBorrowed = null,
        public readonly ?int $idRealty = null,
        public readonly ?string $realty = null,
        public readonly ?string $note = null,
        public readonly ?int $idOccupationRent = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idRealtyCollection: isset($obj->{'ID_RealtyCollection'}) ? (int) $obj->{'ID_RealtyCollection'} : null,
            realtyCollection: isset($obj->{'RealtyCollection'}) ? (string) $obj->{'RealtyCollection'} : null,
            idRealtyType: isset($obj->{'ID_RealtyType'}) ? (int) $obj->{'ID_RealtyType'} : null,
            realtyType: isset($obj->{'RealtyType'}) ? (string) $obj->{'RealtyType'} : null,
            canBeBorrowed: isset($obj->{'CanBeBorrowed'}) ? (bool) $obj->{'CanBeBorrowed'} : null,
            idRealty: isset($obj->{'ID_Realty'}) ? (int) $obj->{'ID_Realty'} : null,
            realty: isset($obj->{'Realty'}) ? (string) $obj->{'Realty'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idOccupationRent: isset($obj->{'ID_OccupationRent'}) ? (int) $obj->{'ID_OccupationRent'} : null,
        );
    }
}
