<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationAllPositionsOutput
{
    public function __construct(
        public readonly ?int $groupedAmount = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idOccupation = null,
        public readonly ?int $idRealty = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
        public readonly ?float $gpsLatitudeStart = null,
        public readonly ?float $gpsLongitudeStart = null,
        public readonly ?float $gpsLatitudeEnd = null,
        public readonly ?float $gpsLongitudeEnd = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            groupedAmount: isset($obj->{'GroupedAmount'}) ? (int) $obj->{'GroupedAmount'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            idOccupation: isset($obj->{'ID_Occupation'}) ? (int) $obj->{'ID_Occupation'} : null,
            idRealty: isset($obj->{'ID_Realty'}) ? (int) $obj->{'ID_Realty'} : null,
            gpsLatitude: isset($obj->{'GpsLatitude'}) ? (float) $obj->{'GpsLatitude'} : null,
            gpsLongitude: isset($obj->{'GpsLongitude'}) ? (float) $obj->{'GpsLongitude'} : null,
            gpsLatitudeStart: isset($obj->{'GpsLatitudeStart'}) ? (float) $obj->{'GpsLatitudeStart'} : null,
            gpsLongitudeStart: isset($obj->{'GpsLongitudeStart'}) ? (float) $obj->{'GpsLongitudeStart'} : null,
            gpsLatitudeEnd: isset($obj->{'GpsLatitudeEnd'}) ? (float) $obj->{'GpsLatitudeEnd'} : null,
            gpsLongitudeEnd: isset($obj->{'GpsLongitudeEnd'}) ? (float) $obj->{'GpsLongitudeEnd'} : null,
        );
    }
}
