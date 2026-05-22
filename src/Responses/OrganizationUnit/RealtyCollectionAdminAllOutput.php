<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RealtyCollectionAdminAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idRealtyCollection = null,
        public readonly ?string $realtyCollection = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idRealtyCollection: isset($obj->{'ID_RealtyCollection'}) ? (int) $obj->{'ID_RealtyCollection'} : null,
            realtyCollection: isset($obj->{'RealtyCollection'}) ? (string) $obj->{'RealtyCollection'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
        );
    }
}
