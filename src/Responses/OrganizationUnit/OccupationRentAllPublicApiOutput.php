<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationRentAllPublicApiOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idOccupation = null,
        public readonly ?int $idRealty = null,
        public readonly ?int $idRealtyCollection = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idOccupation: isset($obj->{'ID_Occupation'}) ? (int) $obj->{'ID_Occupation'} : null,
            idRealty: isset($obj->{'ID_Realty'}) ? (int) $obj->{'ID_Realty'} : null,
            idRealtyCollection: isset($obj->{'ID_RealtyCollection'}) ? (int) $obj->{'ID_RealtyCollection'} : null,
            gpsLatitude: isset($obj->{'GpsLatitude'}) ? (float) $obj->{'GpsLatitude'} : null,
            gpsLongitude: isset($obj->{'GpsLongitude'}) ? (float) $obj->{'GpsLongitude'} : null,
        );
    }
}
