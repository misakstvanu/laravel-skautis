<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseTagAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $event = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $color = null,
        public readonly ?int $idWarehouse = null,
        public readonly ?string $warehouse = null,
        public readonly ?bool $canUpdate = null,
        public readonly ?int $idWarehouseWarehouseTag = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            event: isset($obj->{'Event'}) ? (string) $obj->{'Event'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            color: isset($obj->{'Color'}) ? (string) $obj->{'Color'} : null,
            idWarehouse: isset($obj->{'ID_Warehouse'}) ? (int) $obj->{'ID_Warehouse'} : null,
            warehouse: isset($obj->{'Warehouse'}) ? (string) $obj->{'Warehouse'} : null,
            canUpdate: isset($obj->{'CanUpdate'}) ? (bool) $obj->{'CanUpdate'} : null,
            idWarehouseWarehouseTag: isset($obj->{'ID_WarehouseWarehouseTag'}) ? (int) $obj->{'ID_WarehouseWarehouseTag'} : null,
        );
    }
}
