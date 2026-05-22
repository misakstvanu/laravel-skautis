<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserRoleAllInput
{
    public function __construct(
        public readonly ?int $idUser = null,
        public readonly ?int $idRole = null,
        public readonly ?string $idGroupType = null,
        public readonly ?bool $isActive = null,
        public readonly ?bool $canEdit = null,
        public readonly ?int $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_User' => $this->idUser,
            'ID_Role' => $this->idRole,
            'ID_GroupType' => $this->idGroupType,
            'IsActive' => $this->isActive,
            'CanEdit' => $this->canEdit,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
