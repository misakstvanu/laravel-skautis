<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitRegistrationAllChildInput
{
    public function __construct(
        public readonly ?int $idUnitRegistration = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_UnitRegistration' => $this->idUnitRegistration,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
