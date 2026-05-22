<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantReportHadquartersBuildingInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $year = null,
        public readonly ?string $idGrantState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Year' => $this->year,
            'ID_GrantState' => $this->idGrantState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
