<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitAgeCategoryUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idAgeCategory = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_AgeCategory' => $this->idAgeCategory,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
