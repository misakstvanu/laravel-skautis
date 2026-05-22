<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RealtyAllRealtyCollectionInput
{
    public function __construct(
        public readonly ?int $idRealtyCollection = null,
        public readonly ?bool $isActive = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_RealtyCollection' => $this->idRealtyCollection,
            'IsActive' => $this->isActive,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
