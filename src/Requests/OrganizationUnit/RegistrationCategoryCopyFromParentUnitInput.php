<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RegistrationCategoryCopyFromParentUnitInput
{
    public function __construct(
        public readonly ?int $idUnitRegistrationCopy = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_UnitRegistrationCopy' => $this->idUnitRegistrationCopy,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
