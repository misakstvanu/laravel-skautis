<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserRoleUpdateColorInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idRole = null,
        public readonly ?int $idGroup = null,
        public readonly ?string $color = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'ID_Role' => $this->idRole,
            'ID_Group' => $this->idGroup,
            'Color' => $this->color,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
