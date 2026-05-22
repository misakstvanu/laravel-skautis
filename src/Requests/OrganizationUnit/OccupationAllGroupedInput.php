<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationAllGroupedInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?bool $includeChildUnits = null,
        public readonly ?bool $publish = null,
        public readonly ?int $idRealtyType = null,
        public readonly ?string $advertisingCategories = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
        public readonly ?int $distance = null,
        public readonly ?string $idApplication = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'IncludeChildUnits' => $this->includeChildUnits,
            'Publish' => $this->publish,
            'ID_RealtyType' => $this->idRealtyType,
            'AdvertisingCategories' => $this->advertisingCategories,
            'GpsLatitude' => $this->gpsLatitude,
            'GpsLongitude' => $this->gpsLongitude,
            'Distance' => $this->distance,
            'ID_Application' => $this->idApplication,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
