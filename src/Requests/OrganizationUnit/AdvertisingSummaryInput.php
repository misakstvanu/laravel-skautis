<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class AdvertisingSummaryInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idUnit = null,
        public readonly ?bool $includeChildUnits = null,
        public readonly ?int $idRealty = null,
        public readonly ?int $distance = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
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
            'Distance' => $this->distance,
            'GpsLatitude' => $this->gpsLatitude,
            'GpsLongitude' => $this->gpsLongitude,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
