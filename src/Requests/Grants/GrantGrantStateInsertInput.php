<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantGrantStateInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $idGrantState = null,
        public readonly ?string $grantState = null,
        public readonly ?string $changed = null,
        public readonly ?string $changeNote = null,
        public readonly ?bool $isActual = null,
        public readonly ?int $idUser = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Grant' => $this->idGrant,
            'ID_GrantState' => $this->idGrantState,
            'GrantState' => $this->grantState,
            'Changed' => $this->changed,
            'ChangeNote' => $this->changeNote,
            'IsActual' => $this->isActual,
            'ID_User' => $this->idUser,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
