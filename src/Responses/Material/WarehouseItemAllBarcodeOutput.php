<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseItemAllBarcodeOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $prefixID = null,
        public readonly ?string $displayName = null,
        public readonly ?string $displayNameLimited = null,
        public readonly ?string $inventoryNumber = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            prefixID: isset($obj->{'PrefixID'}) ? (string) $obj->{'PrefixID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            displayNameLimited: isset($obj->{'DisplayNameLimited'}) ? (string) $obj->{'DisplayNameLimited'} : null,
            inventoryNumber: isset($obj->{'InventoryNumber'}) ? (string) $obj->{'InventoryNumber'} : null,
        );
    }
}
