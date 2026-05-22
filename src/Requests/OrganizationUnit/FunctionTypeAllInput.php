<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class FunctionTypeAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $idUnitType = null,
        public readonly ?int $idRole = null,
        public readonly ?bool $isElective = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_UnitType' => $this->idUnitType,
            'ID_Role' => $this->idRole,
            'IsElective' => $this->isElective,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
