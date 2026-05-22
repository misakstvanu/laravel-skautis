<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RegistrationServiceInsertInput
{
    public function __construct(
        public readonly ?int $idUnitRegistration = null,
        public readonly ?string $idRegistrationServiceType = null,
        public readonly ?float $ammount = null,
        public readonly ?int $idVatRate = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_UnitRegistration' => $this->idUnitRegistration,
            'ID_RegistrationServiceType' => $this->idRegistrationServiceType,
            'Ammount' => $this->ammount,
            'ID_VatRate' => $this->idVatRate,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
