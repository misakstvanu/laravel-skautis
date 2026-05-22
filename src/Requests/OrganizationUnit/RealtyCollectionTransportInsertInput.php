<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RealtyCollectionTransportInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idRealtyCollection = null,
        public readonly ?string $realtyCollection = null,
        public readonly ?string $idRealtyTransport = null,
        public readonly ?string $realtyTransport = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_RealtyCollection' => $this->idRealtyCollection,
            'RealtyCollection' => $this->realtyCollection,
            'ID_RealtyTransport' => $this->idRealtyTransport,
            'RealtyTransport' => $this->realtyTransport,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
