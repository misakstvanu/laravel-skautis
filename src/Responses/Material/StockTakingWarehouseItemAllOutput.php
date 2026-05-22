<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class StockTakingWarehouseItemAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idWarehouseItem = null,
        public readonly ?string $warehouseItem = null,
        public readonly ?int $idStockTaking = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idWarehouseItem: isset($obj->{'ID_WarehouseItem'}) ? (int) $obj->{'ID_WarehouseItem'} : null,
            warehouseItem: isset($obj->{'WarehouseItem'}) ? (string) $obj->{'WarehouseItem'} : null,
            idStockTaking: isset($obj->{'ID_StockTaking'}) ? (int) $obj->{'ID_StockTaking'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
