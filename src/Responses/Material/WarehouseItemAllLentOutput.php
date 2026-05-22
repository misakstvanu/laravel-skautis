<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseItemAllLentOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $issued = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $note = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?string $warehouseItemReservationDestination = null,
        public readonly ?string $warehouseItemOriginDisplayName = null,
        public readonly ?bool $isActive = null,
        public readonly ?bool $canEdit = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            issued: isset($obj->{'Issued'}) ? (string) $obj->{'Issued'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            warehouseItemReservationDestination: isset($obj->{'WarehouseItemReservationDestination'}) ? (string) $obj->{'WarehouseItemReservationDestination'} : null,
            warehouseItemOriginDisplayName: isset($obj->{'WarehouseItemOriginDisplayName'}) ? (string) $obj->{'WarehouseItemOriginDisplayName'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            canEdit: isset($obj->{'CanEdit'}) ? (bool) $obj->{'CanEdit'} : null,
        );
    }
}
