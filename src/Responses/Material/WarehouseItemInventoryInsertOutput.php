<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseItemInventoryInsertOutput
{
    public function __construct(
        public readonly ?int $id = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
        );
    }
}
