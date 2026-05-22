<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitJournalDeliveryDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $street = null,
        public readonly ?string $ciry = null,
        public readonly ?string $postCode = null,
        public readonly ?string $firstLine = null,
        public readonly ?string $state = null,
        public readonly ?string $idJournalDeliveryType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            ciry: isset($obj->{'Ciry'}) ? (string) $obj->{'Ciry'} : null,
            postCode: isset($obj->{'PostCode'}) ? (string) $obj->{'PostCode'} : null,
            firstLine: isset($obj->{'FirstLine'}) ? (string) $obj->{'FirstLine'} : null,
            state: isset($obj->{'State'}) ? (string) $obj->{'State'} : null,
            idJournalDeliveryType: isset($obj->{'ID_JournalDeliveryType'}) ? (string) $obj->{'ID_JournalDeliveryType'} : null,
        );
    }
}
