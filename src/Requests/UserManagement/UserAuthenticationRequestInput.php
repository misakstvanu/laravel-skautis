<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserAuthenticationRequestInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $idUser = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_User' => $this->idUser,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
