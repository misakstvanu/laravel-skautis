<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseItemInventoryInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idWarehouseItem = null,
        public readonly ?string $warehouseItem = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $date = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_WarehouseItem' => $this->idWarehouseItem,
            'WarehouseItem' => $this->warehouseItem,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'Date' => $this->date,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
