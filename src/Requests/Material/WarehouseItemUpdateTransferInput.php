<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseItemUpdateTransferInput
{
    public function __construct(
        public readonly ?int $idWarehouse = null,
        public readonly ?int $int = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Warehouse' => $this->idWarehouse,
            'int' => $this->int,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
