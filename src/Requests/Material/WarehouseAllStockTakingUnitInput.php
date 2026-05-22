<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseAllStockTakingUnitInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?bool $isChildIncluded = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'IsChildIncluded' => $this->isChildIncluded,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
