<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseStockTakingAllInput
{
    public function __construct(
        public readonly ?int $idWarehouse = null,
        public readonly ?int $id = null,
        public readonly ?int $idStockTaking = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Warehouse' => $this->idWarehouse,
            'ID' => $this->id,
            'ID_StockTaking' => $this->idStockTaking,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
