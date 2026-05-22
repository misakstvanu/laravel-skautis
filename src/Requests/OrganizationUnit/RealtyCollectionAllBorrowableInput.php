<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RealtyCollectionAllBorrowableInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $displayName = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
        public readonly ?int $distance = null,
        public readonly ?string $regionList = null,
        public readonly ?string $districtList = null,
        public readonly ?string $city = null,
        public readonly ?string $unit = null,
        public readonly ?string $ownerTypeList = null,
        public readonly ?string $realtyTypeList = null,
        public readonly ?string $occupationEquipmentList = null,
        public readonly ?string $realtyCollectionLocationList = null,
        public readonly ?float $price = null,
        public readonly ?string $priceType = null,
        public readonly ?string $occupationLanguageList = null,
        public readonly ?string $date = null,
        public readonly ?int $capacity = null,
        public readonly ?string $occupationTagList = null,
        public readonly ?bool $borrowableForeign = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'DisplayName' => $this->displayName,
            'GpsLatitude' => $this->gpsLatitude,
            'GpsLongitude' => $this->gpsLongitude,
            'Distance' => $this->distance,
            'RegionList' => $this->regionList,
            'DistrictList' => $this->districtList,
            'City' => $this->city,
            'Unit' => $this->unit,
            'OwnerTypeList' => $this->ownerTypeList,
            'RealtyTypeList' => $this->realtyTypeList,
            'OccupationEquipmentList' => $this->occupationEquipmentList,
            'RealtyCollectionLocationList' => $this->realtyCollectionLocationList,
            'Price' => $this->price,
            'PriceType' => $this->priceType,
            'OccupationLanguageList' => $this->occupationLanguageList,
            'Date' => $this->date,
            'Capacity' => $this->capacity,
            'OccupationTagList' => $this->occupationTagList,
            'BorrowableForeign' => $this->borrowableForeign,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
