<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idUnit = null,
        public readonly ?bool $includeChildUnits = null,
        public readonly ?int $idRealty = null,
        public readonly ?bool $publish = null,
        public readonly ?int $idRealtyType = null,
        public readonly ?int $distance = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
        public readonly ?float $gpsLatitudeStart = null,
        public readonly ?float $gpsLongitudeStart = null,
        public readonly ?float $gpsLatitudeEnd = null,
        public readonly ?float $gpsLongitudeEnd = null,
        public readonly ?string $advertisingCategories = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Unit' => $this->idUnit,
            'IncludeChildUnits' => $this->includeChildUnits,
            'ID_Realty' => $this->idRealty,
            'Publish' => $this->publish,
            'ID_RealtyType' => $this->idRealtyType,
            'Distance' => $this->distance,
            'GpsLatitude' => $this->gpsLatitude,
            'GpsLongitude' => $this->gpsLongitude,
            'GpsLatitudeStart' => $this->gpsLatitudeStart,
            'GpsLongitudeStart' => $this->gpsLongitudeStart,
            'GpsLatitudeEnd' => $this->gpsLatitudeEnd,
            'GpsLongitudeEnd' => $this->gpsLongitudeEnd,
            'AdvertisingCategories' => $this->advertisingCategories,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
