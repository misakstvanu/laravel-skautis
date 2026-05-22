<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RegistrationServiceAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnitRegistration = null,
        public readonly ?string $idRegistrationServiceType = null,
        public readonly ?string $registrationServiceType = null,
        public readonly ?float $ammount = null,
        public readonly ?float $ammountWithVat = null,
        public readonly ?int $idVatRate = null,
        public readonly ?string $vatRate = null,
        public readonly ?int $idUnit = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnitRegistration: isset($obj->{'ID_UnitRegistration'}) ? (int) $obj->{'ID_UnitRegistration'} : null,
            idRegistrationServiceType: isset($obj->{'ID_RegistrationServiceType'}) ? (string) $obj->{'ID_RegistrationServiceType'} : null,
            registrationServiceType: isset($obj->{'RegistrationServiceType'}) ? (string) $obj->{'RegistrationServiceType'} : null,
            ammount: isset($obj->{'Ammount'}) ? (float) $obj->{'Ammount'} : null,
            ammountWithVat: isset($obj->{'AmmountWithVat'}) ? (float) $obj->{'AmmountWithVat'} : null,
            idVatRate: isset($obj->{'ID_VatRate'}) ? (int) $obj->{'ID_VatRate'} : null,
            vatRate: isset($obj->{'VatRate'}) ? (string) $obj->{'VatRate'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
        );
    }
}
