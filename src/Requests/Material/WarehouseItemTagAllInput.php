<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseItemTagAllInput
{
    public function __construct(
        public readonly ?int $idWarehouseItem = null,
        public readonly ?int $id = null,
        public readonly ?int $idWarehouseTag = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_WarehouseItem' => $this->idWarehouseItem,
            'ID' => $this->id,
            'ID_WarehouseTag' => $this->idWarehouseTag,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
