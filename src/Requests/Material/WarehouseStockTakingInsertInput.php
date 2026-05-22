<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseStockTakingInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idWarehouse = null,
        public readonly ?string $warehouse = null,
        public readonly ?int $idStockTaking = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Warehouse' => $this->idWarehouse,
            'Warehouse' => $this->warehouse,
            'ID_StockTaking' => $this->idStockTaking,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
