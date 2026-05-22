<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseStockTakingAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idWarehouse = null,
        public readonly ?string $warehouse = null,
        public readonly ?int $idStockTaking = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idWarehouse: isset($obj->{'ID_Warehouse'}) ? (int) $obj->{'ID_Warehouse'} : null,
            warehouse: isset($obj->{'Warehouse'}) ? (string) $obj->{'Warehouse'} : null,
            idStockTaking: isset($obj->{'ID_StockTaking'}) ? (int) $obj->{'ID_StockTaking'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
