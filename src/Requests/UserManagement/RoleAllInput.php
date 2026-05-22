<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class RoleAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $idGroupType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_UnitType' => $this->idUnitType,
            'ID_GroupType' => $this->idGroupType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
