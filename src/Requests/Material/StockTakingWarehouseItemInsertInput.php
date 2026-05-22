<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class StockTakingWarehouseItemInsertInput
{
    public function __construct(
        public readonly ?int $idStockTaking = null,
        public readonly ?int $idWarehouseItem = null,
        public readonly ?int $int = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_StockTaking' => $this->idStockTaking,
            'ID_WarehouseItem' => $this->idWarehouseItem,
            'int' => $this->int,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
