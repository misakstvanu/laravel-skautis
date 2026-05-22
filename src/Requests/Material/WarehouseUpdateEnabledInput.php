<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseUpdateEnabledInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idWarehouseType = null,
        public readonly ?string $warehouseType = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitFullName = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $event = null,
        public readonly ?int $idWarehouseMain = null,
        public readonly ?string $warehouseMain = null,
        public readonly ?bool $isDefault = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?int $idDistrict = null,
        public readonly ?string $district = null,
        public readonly ?string $postcode = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
        public readonly ?string $note = null,
        public readonly ?bool $canUpdate = null,
        public readonly ?int $idUnitCentral = null,
        public readonly ?string $unitCentral = null,
        public readonly ?string $unitCentralFullName = null,
        public readonly ?string $unitCentralRegistrationNumber = null,
        public readonly ?bool $isEnabled = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_WarehouseType' => $this->idWarehouseType,
            'WarehouseType' => $this->warehouseType,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'UnitFullName' => $this->unitFullName,
            'RegistrationNumber' => $this->registrationNumber,
            'ID_Event' => $this->idEvent,
            'Event' => $this->event,
            'ID_WarehouseMain' => $this->idWarehouseMain,
            'WarehouseMain' => $this->warehouseMain,
            'IsDefault' => $this->isDefault,
            'Street' => $this->street,
            'City' => $this->city,
            'ID_District' => $this->idDistrict,
            'District' => $this->district,
            'Postcode' => $this->postcode,
            'GpsLatitude' => $this->gpsLatitude,
            'GpsLongitude' => $this->gpsLongitude,
            'Note' => $this->note,
            'CanUpdate' => $this->canUpdate,
            'ID_UnitCentral' => $this->idUnitCentral,
            'UnitCentral' => $this->unitCentral,
            'UnitCentralFullName' => $this->unitCentralFullName,
            'UnitCentralRegistrationNumber' => $this->unitCentralRegistrationNumber,
            'IsEnabled' => $this->isEnabled,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
