<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationSummaryOutput
{
    public function __construct(
        public readonly ?int $idRegistrationCategory = null,
        public readonly ?string $registrationCategory = null,
        public readonly ?int $count = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $unitType = null,
        public readonly ?float $amount = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idRegistrationCategory: isset($obj->{'ID_RegistrationCategory'}) ? (int) $obj->{'ID_RegistrationCategory'} : null,
            registrationCategory: isset($obj->{'RegistrationCategory'}) ? (string) $obj->{'RegistrationCategory'} : null,
            count: isset($obj->{'Count'}) ? (int) $obj->{'Count'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
        );
    }
}
