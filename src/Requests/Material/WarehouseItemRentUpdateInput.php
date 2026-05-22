<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseItemRentUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idWarehouseItem = null,
        public readonly ?string $warehouseItem = null,
        public readonly ?string $startDate = null,
        public readonly ?string $endDate = null,
        public readonly ?string $note = null,
        public readonly ?int $isActive = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_WarehouseItem' => $this->idWarehouseItem,
            'WarehouseItem' => $this->warehouseItem,
            'StartDate' => $this->startDate,
            'EndDate' => $this->endDate,
            'Note' => $this->note,
            'IsActive' => $this->isActive,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
