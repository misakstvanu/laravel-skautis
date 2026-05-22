<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserRoleAllUserUnitInput
{
    public function __construct(
        public readonly ?int $idUser = null,
        public readonly ?int $idUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_User' => $this->idUser,
            'ID_Unit' => $this->idUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
