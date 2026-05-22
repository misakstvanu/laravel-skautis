<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RealtyCollectionTransportAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idRealtyCollection = null,
        public readonly ?string $realtyCollection = null,
        public readonly ?string $idRealtyTransport = null,
        public readonly ?string $realtyTransport = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idRealtyCollection: isset($obj->{'ID_RealtyCollection'}) ? (int) $obj->{'ID_RealtyCollection'} : null,
            realtyCollection: isset($obj->{'RealtyCollection'}) ? (string) $obj->{'RealtyCollection'} : null,
            idRealtyTransport: isset($obj->{'ID_RealtyTransport'}) ? (string) $obj->{'ID_RealtyTransport'} : null,
            realtyTransport: isset($obj->{'RealtyTransport'}) ? (string) $obj->{'RealtyTransport'} : null,
        );
    }
}
