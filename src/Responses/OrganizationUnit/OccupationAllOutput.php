<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $idRealty = null,
        public readonly ?string $realty = null,
        public readonly ?bool $publish = null,
        public readonly ?string $note = null,
        public readonly ?string $address = null,
        public readonly ?string $description = null,
        public readonly ?int $idRealtyType = null,
        public readonly ?string $realtyType = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
        public readonly ?bool $isUsed = null,
        public readonly ?int $idRealtyTypeOccupation = null,
        public readonly ?string $realtyTypeOccupation = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idRealty: isset($obj->{'ID_Realty'}) ? (int) $obj->{'ID_Realty'} : null,
            realty: isset($obj->{'Realty'}) ? (string) $obj->{'Realty'} : null,
            publish: isset($obj->{'Publish'}) ? (bool) $obj->{'Publish'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            address: isset($obj->{'Address'}) ? (string) $obj->{'Address'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            idRealtyType: isset($obj->{'ID_RealtyType'}) ? (int) $obj->{'ID_RealtyType'} : null,
            realtyType: isset($obj->{'RealtyType'}) ? (string) $obj->{'RealtyType'} : null,
            gpsLatitude: isset($obj->{'GpsLatitude'}) ? (float) $obj->{'GpsLatitude'} : null,
            gpsLongitude: isset($obj->{'GpsLongitude'}) ? (float) $obj->{'GpsLongitude'} : null,
            isUsed: isset($obj->{'IsUsed'}) ? (bool) $obj->{'IsUsed'} : null,
            idRealtyTypeOccupation: isset($obj->{'ID_RealtyTypeOccupation'}) ? (int) $obj->{'ID_RealtyTypeOccupation'} : null,
            realtyTypeOccupation: isset($obj->{'RealtyTypeOccupation'}) ? (string) $obj->{'RealtyTypeOccupation'} : null,
        );
    }
}
