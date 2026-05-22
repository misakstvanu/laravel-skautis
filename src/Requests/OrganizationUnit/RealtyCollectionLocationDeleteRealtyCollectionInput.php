<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RealtyCollectionLocationDeleteRealtyCollectionInput
{
    public function __construct(
        public readonly ?int $idRealtyCollection = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_RealtyCollection' => $this->idRealtyCollection,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
