<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitRegistrationAllStatsAgeInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?bool $isExpanded = null,
        public readonly ?int $lastNYears = null,
        public readonly ?bool $prepareInvertedDatatable = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'IsExpanded' => $this->isExpanded,
            'LastNYears' => $this->lastNYears,
            'PrepareInvertedDatatable' => $this->prepareInvertedDatatable,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
