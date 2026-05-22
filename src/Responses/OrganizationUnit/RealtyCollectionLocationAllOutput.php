<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RealtyCollectionLocationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idRealtyCollection = null,
        public readonly ?string $realtyCollection = null,
        public readonly ?string $idRealtyLocation = null,
        public readonly ?string $realtyLocation = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idRealtyCollection: isset($obj->{'ID_RealtyCollection'}) ? (int) $obj->{'ID_RealtyCollection'} : null,
            realtyCollection: isset($obj->{'RealtyCollection'}) ? (string) $obj->{'RealtyCollection'} : null,
            idRealtyLocation: isset($obj->{'ID_RealtyLocation'}) ? (string) $obj->{'ID_RealtyLocation'} : null,
            realtyLocation: isset($obj->{'RealtyLocation'}) ? (string) $obj->{'RealtyLocation'} : null,
        );
    }
}
