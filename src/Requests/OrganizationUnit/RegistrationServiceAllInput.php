<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RegistrationServiceAllInput
{
    public function __construct(
        public readonly ?int $idUnitRegistration = null,
        public readonly ?string $idRegistrationServiceType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_UnitRegistration' => $this->idUnitRegistration,
            'ID_RegistrationServiceType' => $this->idRegistrationServiceType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
