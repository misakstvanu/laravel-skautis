<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class LoginUpdateRoleAutoInput
{
    public function __construct(
        public readonly ?string $idTable = null,
        public readonly ?int $id = null,
        public readonly ?string $idAction = null,
        public readonly ?int $idGroup = null,
        public readonly ?string $requiredPermissions = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Table' => $this->idTable,
            'ID' => $this->id,
            'ID_Action' => $this->idAction,
            'ID_Group' => $this->idGroup,
            'RequiredPermissions' => $this->requiredPermissions,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
