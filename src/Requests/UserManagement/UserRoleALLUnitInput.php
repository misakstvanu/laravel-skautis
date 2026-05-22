<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserRoleALLUnitInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $idRole = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID_Role' => $this->idRole,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
