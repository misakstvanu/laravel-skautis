<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationAllUnitOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?string $unit = null,
        public readonly ?string $realtyType = null,
        public readonly ?bool $canBeBorrowed = null,
        public readonly ?int $idRealty = null,
        public readonly ?string $realty = null,
        public readonly ?bool $canRead = null,
        public readonly ?bool $isPublished = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            realtyType: isset($obj->{'RealtyType'}) ? (string) $obj->{'RealtyType'} : null,
            canBeBorrowed: isset($obj->{'CanBeBorrowed'}) ? (bool) $obj->{'CanBeBorrowed'} : null,
            idRealty: isset($obj->{'ID_Realty'}) ? (int) $obj->{'ID_Realty'} : null,
            realty: isset($obj->{'Realty'}) ? (string) $obj->{'Realty'} : null,
            canRead: isset($obj->{'CanRead'}) ? (bool) $obj->{'CanRead'} : null,
            isPublished: isset($obj->{'IsPublished'}) ? (bool) $obj->{'IsPublished'} : null,
        );
    }
}
