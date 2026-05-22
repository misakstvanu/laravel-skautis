<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isEnabled = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idWarehouseType = null,
        public readonly ?string $warehouseType = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $event = null,
        public readonly ?int $idWarehouseMain = null,
        public readonly ?string $warehouseMain = null,
        public readonly ?int $idUnitWarehouseMain = null,
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
        public readonly ?string $displayNameWithUnitID = null,
        public readonly ?string $unitFullName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isEnabled: isset($obj->{'IsEnabled'}) ? (bool) $obj->{'IsEnabled'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idWarehouseType: isset($obj->{'ID_WarehouseType'}) ? (string) $obj->{'ID_WarehouseType'} : null,
            warehouseType: isset($obj->{'WarehouseType'}) ? (string) $obj->{'WarehouseType'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            event: isset($obj->{'Event'}) ? (string) $obj->{'Event'} : null,
            idWarehouseMain: isset($obj->{'ID_WarehouseMain'}) ? (int) $obj->{'ID_WarehouseMain'} : null,
            warehouseMain: isset($obj->{'WarehouseMain'}) ? (string) $obj->{'WarehouseMain'} : null,
            idUnitWarehouseMain: isset($obj->{'ID_UnitWarehouseMain'}) ? (int) $obj->{'ID_UnitWarehouseMain'} : null,
            isDefault: isset($obj->{'IsDefault'}) ? (bool) $obj->{'IsDefault'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            idDistrict: isset($obj->{'ID_District'}) ? (int) $obj->{'ID_District'} : null,
            district: isset($obj->{'District'}) ? (string) $obj->{'District'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            gpsLatitude: isset($obj->{'GpsLatitude'}) ? (float) $obj->{'GpsLatitude'} : null,
            gpsLongitude: isset($obj->{'GpsLongitude'}) ? (float) $obj->{'GpsLongitude'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            canUpdate: isset($obj->{'CanUpdate'}) ? (bool) $obj->{'CanUpdate'} : null,
            displayNameWithUnitID: isset($obj->{'DisplayNameWithUnitID'}) ? (string) $obj->{'DisplayNameWithUnitID'} : null,
            unitFullName: isset($obj->{'UnitFullName'}) ? (string) $obj->{'UnitFullName'} : null,
        );
    }
}
