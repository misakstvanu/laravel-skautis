<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitRegistrationDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $year = null,
        public readonly ?string $instructions = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'Year' => $this->year,
            'Instructions' => $this->instructions,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
