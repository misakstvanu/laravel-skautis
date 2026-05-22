<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitAuditActivityUpdateUnitInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $idUnitShare = null,
        public readonly ?int $idUnitAuditor = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID_UnitShare' => $this->idUnitShare,
            'ID_UnitAuditor' => $this->idUnitAuditor,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
