<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseItemRentTypeAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $displayName = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
