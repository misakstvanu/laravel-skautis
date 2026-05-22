<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitAllUnitInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?bool $searchStredisko = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'SearchStredisko' => $this->searchStredisko,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
