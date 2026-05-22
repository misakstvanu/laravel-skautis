<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RealtyCollectionLocationInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idRealtyCollection = null,
        public readonly ?string $realtyCollection = null,
        public readonly ?string $idRealtyLocation = null,
        public readonly ?string $realtyLocation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_RealtyCollection' => $this->idRealtyCollection,
            'RealtyCollection' => $this->realtyCollection,
            'ID_RealtyLocation' => $this->idRealtyLocation,
            'RealtyLocation' => $this->realtyLocation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
