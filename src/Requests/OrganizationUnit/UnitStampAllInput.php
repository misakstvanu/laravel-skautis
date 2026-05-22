<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitStampAllInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $id = null,
        public readonly ?string $idStampType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID' => $this->id,
            'ID_StampType' => $this->idStampType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
