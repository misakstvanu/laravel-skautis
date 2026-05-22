<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantBudgetUpdateInput
{
    public function __construct(
        public readonly ?int $idGrant = null,
        public readonly ?int $idGrantBudget = null,
        public readonly ?float $real = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Grant' => $this->idGrant,
            'ID_GrantBudget' => $this->idGrantBudget,
            'Real' => $this->real,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}

