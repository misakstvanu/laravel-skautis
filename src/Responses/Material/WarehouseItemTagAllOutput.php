<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseItemTagAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idWarehouseItem = null,
        public readonly ?string $warehouseItem = null,
        public readonly ?int $idWarehouseTag = null,
        public readonly ?string $warehouseTag = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idWarehouseItem: isset($obj->{'ID_WarehouseItem'}) ? (int) $obj->{'ID_WarehouseItem'} : null,
            warehouseItem: isset($obj->{'WarehouseItem'}) ? (string) $obj->{'WarehouseItem'} : null,
            idWarehouseTag: isset($obj->{'ID_WarehouseTag'}) ? (int) $obj->{'ID_WarehouseTag'} : null,
            warehouseTag: isset($obj->{'WarehouseTag'}) ? (string) $obj->{'WarehouseTag'} : null,
        );
    }
}
