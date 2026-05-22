<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserLoginDeviceAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
