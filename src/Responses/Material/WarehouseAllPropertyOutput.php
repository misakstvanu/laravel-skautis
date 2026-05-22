<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseAllPropertyOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idWarehouseType = null,
        public readonly ?bool $isEnabled = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idWarehouseType: isset($obj->{'ID_WarehouseType'}) ? (string) $obj->{'ID_WarehouseType'} : null,
            isEnabled: isset($obj->{'IsEnabled'}) ? (bool) $obj->{'IsEnabled'} : null,
        );
    }
}
