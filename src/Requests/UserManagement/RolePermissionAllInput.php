<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class RolePermissionAllInput
{
    public function __construct(
        public readonly ?int $idRole = null,
        public readonly ?string $idPermission = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Role' => $this->idRole,
            'ID_Permission' => $this->idPermission,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
