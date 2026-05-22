<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class HonourUnitAllInput
{
    public function __construct(
        public readonly ?int $idHonour = null,
        public readonly ?int $idUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Honour' => $this->idHonour,
            'ID_Unit' => $this->idUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
