<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseItemDetailPhotoOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idDocument = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
        );
    }
}
