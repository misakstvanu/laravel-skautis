<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RealtyCollectionInsertOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idRealty = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idRealty: isset($obj->{'ID_Realty'}) ? (int) $obj->{'ID_Realty'} : null,
        );
    }
}
