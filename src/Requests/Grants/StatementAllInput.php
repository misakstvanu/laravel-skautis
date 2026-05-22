<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class StatementAllInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idGrant = null,
        public readonly ?int $id = null,
        public readonly ?bool $isRevenue = null,
        public readonly ?bool $isBudget = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'ID_Grant' => $this->idGrant,
            'ID' => $this->id,
            'IsRevenue' => $this->isRevenue,
            'IsBudget' => $this->isBudget,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
