<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseTagAllInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $id = null,
        public readonly ?int $idWarehouse = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $includeChild = null,
        public readonly ?bool $uniqueOnly = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID' => $this->id,
            'ID_Warehouse' => $this->idWarehouse,
            'DisplayName' => $this->displayName,
            'IncludeChild' => $this->includeChild,
            'UniqueOnly' => $this->uniqueOnly,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
