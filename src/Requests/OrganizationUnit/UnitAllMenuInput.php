<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitAllMenuInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnitParent = null,
        public readonly ?int $idUnitChild = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'ID_UnitParent' => $this->idUnitParent,
            'ID_UnitChild' => $this->idUnitChild,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
