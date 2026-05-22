<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class RoleInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idGroupType = null,
        public readonly ?string $groupType = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
        public readonly ?bool $isHidden = null,
        public readonly ?bool $isTwoFactorRequired = null,
        public readonly ?string $color = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_GroupType' => $this->idGroupType,
            'GroupType' => $this->groupType,
            'ID_UnitType' => $this->idUnitType,
            'UnitType' => $this->unitType,
            'IsHidden' => $this->isHidden,
            'IsTwoFactorRequired' => $this->isTwoFactorRequired,
            'Color' => $this->color,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
