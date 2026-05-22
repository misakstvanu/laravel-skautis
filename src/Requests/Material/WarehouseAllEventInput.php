<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseAllEventInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventGeneral = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idWarehouseType = null,
        public readonly ?int $idWarehouseMain = null,
        public readonly ?int $idDistrict = null,
        public readonly ?bool $isChildIncluded = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventGeneral' => $this->idEventGeneral,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_WarehouseType' => $this->idWarehouseType,
            'ID_WarehouseMain' => $this->idWarehouseMain,
            'ID_District' => $this->idDistrict,
            'IsChildIncluded' => $this->isChildIncluded,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
