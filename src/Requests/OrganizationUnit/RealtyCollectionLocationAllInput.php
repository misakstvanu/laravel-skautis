<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RealtyCollectionLocationAllInput
{
    public function __construct(
        public readonly ?int $idRealtyCollection = null,
        public readonly ?int $id = null,
        public readonly ?string $idRealtyLocation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_RealtyCollection' => $this->idRealtyCollection,
            'ID' => $this->id,
            'ID_RealtyLocation' => $this->idRealtyLocation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
