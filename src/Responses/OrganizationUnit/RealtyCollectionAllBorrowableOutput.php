<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RealtyCollectionAllBorrowableOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?int $idRealty = null,
        public readonly ?string $realty = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
        public readonly ?int $idRegion = null,
        public readonly ?string $region = null,
        public readonly ?int $idDistrict = null,
        public readonly ?string $district = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            idRealty: isset($obj->{'ID_Realty'}) ? (int) $obj->{'ID_Realty'} : null,
            realty: isset($obj->{'Realty'}) ? (string) $obj->{'Realty'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            gpsLatitude: isset($obj->{'GpsLatitude'}) ? (float) $obj->{'GpsLatitude'} : null,
            gpsLongitude: isset($obj->{'GpsLongitude'}) ? (float) $obj->{'GpsLongitude'} : null,
            idRegion: isset($obj->{'ID_Region'}) ? (int) $obj->{'ID_Region'} : null,
            region: isset($obj->{'Region'}) ? (string) $obj->{'Region'} : null,
            idDistrict: isset($obj->{'ID_District'}) ? (int) $obj->{'ID_District'} : null,
            district: isset($obj->{'District'}) ? (string) $obj->{'District'} : null,
        );
    }
}
