<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonRegistrationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idUnitRegistration = null,
        public readonly ?int $year = null,
        public readonly ?bool $isDelivered = null,
        public readonly ?float $amountCategory = null,
        public readonly ?float $amountServices = null,
        public readonly ?float $amountTotal = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idRegistrationCategory = null,
        public readonly ?string $registrationCategory = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?string $membershipType = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $membershipCategory = null,
        public readonly ?bool $isAfterDeadline = null,
        public readonly ?bool $isJournal = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?bool $hasPermission = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idUnitRegistration: isset($obj->{'ID_UnitRegistration'}) ? (int) $obj->{'ID_UnitRegistration'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            isDelivered: isset($obj->{'IsDelivered'}) ? (bool) $obj->{'IsDelivered'} : null,
            amountCategory: isset($obj->{'AmountCategory'}) ? (float) $obj->{'AmountCategory'} : null,
            amountServices: isset($obj->{'AmountServices'}) ? (float) $obj->{'AmountServices'} : null,
            amountTotal: isset($obj->{'AmountTotal'}) ? (float) $obj->{'AmountTotal'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            idRegistrationCategory: isset($obj->{'ID_RegistrationCategory'}) ? (int) $obj->{'ID_RegistrationCategory'} : null,
            registrationCategory: isset($obj->{'RegistrationCategory'}) ? (string) $obj->{'RegistrationCategory'} : null,
            idMembershipType: isset($obj->{'ID_MembershipType'}) ? (string) $obj->{'ID_MembershipType'} : null,
            membershipType: isset($obj->{'MembershipType'}) ? (string) $obj->{'MembershipType'} : null,
            idMembershipCategory: isset($obj->{'ID_MembershipCategory'}) ? (string) $obj->{'ID_MembershipCategory'} : null,
            membershipCategory: isset($obj->{'MembershipCategory'}) ? (string) $obj->{'MembershipCategory'} : null,
            isAfterDeadline: isset($obj->{'IsAfterDeadline'}) ? (bool) $obj->{'IsAfterDeadline'} : null,
            isJournal: isset($obj->{'IsJournal'}) ? (bool) $obj->{'IsJournal'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            hasPermission: isset($obj->{'HasPermission'}) ? (bool) $obj->{'HasPermission'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
        );
    }
}
