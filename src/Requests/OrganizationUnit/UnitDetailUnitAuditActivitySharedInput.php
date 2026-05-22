<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitDetailUnitAuditActivitySharedInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
