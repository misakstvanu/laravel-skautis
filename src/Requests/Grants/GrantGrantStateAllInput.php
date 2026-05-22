<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantGrantStateAllInput
{
    public function __construct(
        public readonly ?int $idGrant = null,
        public readonly ?int $id = null,
        public readonly ?string $idGrantState = null,
        public readonly ?int $idUser = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Grant' => $this->idGrant,
            'ID' => $this->id,
            'ID_GrantState' => $this->idGrantState,
            'ID_User' => $this->idUser,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
