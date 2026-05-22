<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseItemAllStockTakingInput
{
    public function __construct(
        public readonly ?int $idStockTaking = null,
        public readonly ?int $idWarehouse = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_StockTaking' => $this->idStockTaking,
            'ID_Warehouse' => $this->idWarehouse,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
