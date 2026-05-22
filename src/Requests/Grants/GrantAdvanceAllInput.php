<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAdvanceAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?int $idEventEducationTerm = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Grant' => $this->idGrant,
            'ID_EventEducationTerm' => $this->idEventEducationTerm,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
