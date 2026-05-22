<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class WarehouseItemInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?string $displayName = null,
        public readonly ?string $inventoryNumber = null,
        public readonly ?bool $includeChild = null,
        public readonly ?int $int = null,
        public readonly ?bool $eventRent = null,
        public readonly ?bool $unitRent = null,
        public readonly ?bool $commercialRent = null,
        public readonly ?bool $isDelete = null,
        public readonly ?bool $inWarehouse = null,
        public readonly ?int $count = null,
        public readonly ?int $rowMin = null,
        public readonly ?string $sort = null,
        public readonly ?bool $reverse = null,
        public readonly ?string $idWarehouseItemCategory = null,
        public readonly ?string $string = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'DisplayName' => $this->displayName,
            'InventoryNumber' => $this->inventoryNumber,
            'IncludeChild' => $this->includeChild,
            'int' => $this->int,
            'EventRent' => $this->eventRent,
            'UnitRent' => $this->unitRent,
            'CommercialRent' => $this->commercialRent,
            'IsDelete' => $this->isDelete,
            'InWarehouse' => $this->inWarehouse,
            'Count' => $this->count,
            'RowMin' => $this->rowMin,
            'Sort' => $this->sort,
            'Reverse' => $this->reverse,
            'ID_WarehouseItemCategory' => $this->idWarehouseItemCategory,
            'string' => $this->string,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
