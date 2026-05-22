<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class RolePermissionUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idRole = null,
        public readonly ?string $idPermission = null,
        public readonly ?bool $isHierarchic = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Role' => $this->idRole,
            'ID_Permission' => $this->idPermission,
            'IsHierarchic' => $this->isHierarchic,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
