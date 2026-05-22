<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RealtyCollectionTransportAllInput
{
    public function __construct(
        public readonly ?int $idRealtyCollection = null,
        public readonly ?int $id = null,
        public readonly ?string $idRealtyTransport = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_RealtyCollection' => $this->idRealtyCollection,
            'ID' => $this->id,
            'ID_RealtyTransport' => $this->idRealtyTransport,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
