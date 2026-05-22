<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitTypeAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $idUnitTypeCreate = null,
        public readonly ?string $idUnitTypeParent = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_UnitTypeCreate' => $this->idUnitTypeCreate,
            'ID_UnitTypeParent' => $this->idUnitTypeParent,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
