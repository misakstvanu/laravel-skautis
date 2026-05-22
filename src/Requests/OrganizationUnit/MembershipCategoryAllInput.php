<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MembershipCategoryAllInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idSex = null,
        public readonly ?int $age = null,
        public readonly ?int $idUnit = null,
        public readonly ?bool $addCombinations = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_Sex' => $this->idSex,
            'Age' => $this->age,
            'ID_Unit' => $this->idUnit,
            'AddCombinations' => $this->addCombinations,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
