<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class PermissionAllInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idGroupType = null,
        public readonly ?bool $isStatic = null,
        public readonly ?int $idRole = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_GroupType' => $this->idGroupType,
            'IsStatic' => $this->isStatic,
            'ID_Role' => $this->idRole,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
