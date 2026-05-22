<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitJournalDeliveryAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $street = null,
        public readonly ?string $ciry = null,
        public readonly ?string $postCode = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            ciry: isset($obj->{'Ciry'}) ? (string) $obj->{'Ciry'} : null,
            postCode: isset($obj->{'PostCode'}) ? (string) $obj->{'PostCode'} : null,
        );
    }
}
