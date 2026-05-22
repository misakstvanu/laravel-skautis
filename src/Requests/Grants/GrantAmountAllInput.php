<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAmountAllInput
{
    public function __construct(
        public readonly ?int $idGrant = null,
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Grant' => $this->idGrant,
            'ID' => $this->id,
            'ID_EventEducationType' => $this->idEventEducationType,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
