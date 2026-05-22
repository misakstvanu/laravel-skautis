<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserLoginCodeAllInput
{
    public function __construct(
        public readonly ?int $idUser = null,
        public readonly ?int $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_User' => $this->idUser,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
