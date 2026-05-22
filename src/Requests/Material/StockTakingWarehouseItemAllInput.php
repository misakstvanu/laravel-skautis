<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class StockTakingWarehouseItemAllInput
{
    public function __construct(
        public readonly ?int $idStockTaking = null,
        public readonly ?int $id = null,
        public readonly ?int $idWarehouseItem = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_StockTaking' => $this->idStockTaking,
            'ID' => $this->id,
            'ID_WarehouseItem' => $this->idWarehouseItem,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
