<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseItemInventoryAllInput
{
    public function __construct(
        public readonly ?int $idWarehouseItem = null,
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_WarehouseItem' => $this->idWarehouseItem,
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
