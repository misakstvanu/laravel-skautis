<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseItemCategoryAllInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idWarehouseItemCategoryParent = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_WarehouseItemCategoryParent' => $this->idWarehouseItemCategoryParent,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
