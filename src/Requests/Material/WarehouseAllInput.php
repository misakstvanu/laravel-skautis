<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseAllInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idWarehouseType = null,
        public readonly ?int $idEvent = null,
        public readonly ?int $idWarehouseMain = null,
        public readonly ?int $idDistrict = null,
        public readonly ?bool $isChildIncluded = null,
        public readonly ?bool $isEnabled = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_WarehouseType' => $this->idWarehouseType,
            'ID_Event' => $this->idEvent,
            'ID_WarehouseMain' => $this->idWarehouseMain,
            'ID_District' => $this->idDistrict,
            'IsChildIncluded' => $this->isChildIncluded,
            'IsEnabled' => $this->isEnabled,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
