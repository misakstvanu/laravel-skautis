<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationAllPositionsInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?float $gpsLatitudeStart = null,
        public readonly ?float $gpsLongitudeStart = null,
        public readonly ?float $gpsLatitudeEnd = null,
        public readonly ?float $gpsLongitudeEnd = null,
        public readonly ?int $idUnit = null,
        public readonly ?bool $includeChildUnits = null,
        public readonly ?bool $publish = null,
        public readonly ?int $idRealtyType = null,
        public readonly ?string $advertisingCategories = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
        public readonly ?int $distance = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'GpsLatitudeStart' => $this->gpsLatitudeStart,
            'GpsLongitudeStart' => $this->gpsLongitudeStart,
            'GpsLatitudeEnd' => $this->gpsLatitudeEnd,
            'GpsLongitudeEnd' => $this->gpsLongitudeEnd,
            'ID_Unit' => $this->idUnit,
            'IncludeChildUnits' => $this->includeChildUnits,
            'Publish' => $this->publish,
            'ID_RealtyType' => $this->idRealtyType,
            'AdvertisingCategories' => $this->advertisingCategories,
            'GpsLatitude' => $this->gpsLatitude,
            'GpsLongitude' => $this->gpsLongitude,
            'Distance' => $this->distance,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
