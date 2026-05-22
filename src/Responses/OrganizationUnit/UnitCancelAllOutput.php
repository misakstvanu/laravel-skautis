<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitCancelAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idUnitCancelType = null,
        public readonly ?string $unitCancelType = null,
        public readonly ?string $dateDecision = null,
        public readonly ?string $description = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $validTo = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idUnitCancelType: isset($obj->{'ID_UnitCancelType'}) ? (string) $obj->{'ID_UnitCancelType'} : null,
            unitCancelType: isset($obj->{'UnitCancelType'}) ? (string) $obj->{'UnitCancelType'} : null,
            dateDecision: isset($obj->{'DateDecision'}) ? (string) $obj->{'DateDecision'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
        );
    }
}
