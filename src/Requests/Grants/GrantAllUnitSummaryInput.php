<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAllUnitSummaryInput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idGrantState = null,
        public readonly ?string $idGrantType = null,
        public readonly ?bool $showSubordinateUnits = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Year' => $this->year,
            'ID_Unit' => $this->idUnit,
            'ID_GrantState' => $this->idGrantState,
            'ID_GrantType' => $this->idGrantType,
            'ShowSubordinateUnits' => $this->showSubordinateUnits,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
