<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitRegistrationAllStatsCategoryTableInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $lastNYears = null,
        public readonly ?bool $isExpanded = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'LastNYears' => $this->lastNYears,
            'IsExpanded' => $this->isExpanded,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
