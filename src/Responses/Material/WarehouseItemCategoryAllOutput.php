<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseItemCategoryAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idWarehouseItemCategoryParent = null,
        public readonly ?string $warehouseItemCategoryParent = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idWarehouseItemCategoryParent: isset($obj->{'ID_WarehouseItemCategoryParent'}) ? (string) $obj->{'ID_WarehouseItemCategoryParent'} : null,
            warehouseItemCategoryParent: isset($obj->{'WarehouseItemCategoryParent'}) ? (string) $obj->{'WarehouseItemCategoryParent'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
