<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class WarehouseItemStockTakingDiscardedInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idWarehouse = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Warehouse' => $this->idWarehouse,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
