<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitRegistrationAllSubStatsTroopTableInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?bool $isExpanded = null,
        public readonly ?int $lastNYears = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'IsExpanded' => $this->isExpanded,
            'LastNYears' => $this->lastNYears,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
