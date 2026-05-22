<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class HonourUnitAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idHonour = null,
        public readonly ?string $honour = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idHonour: isset($obj->{'ID_Honour'}) ? (int) $obj->{'ID_Honour'} : null,
            honour: isset($obj->{'Honour'}) ? (string) $obj->{'Honour'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
        );
    }
}
