<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitAuditorDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
