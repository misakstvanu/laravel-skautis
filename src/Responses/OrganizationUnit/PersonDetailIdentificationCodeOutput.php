<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonDetailIdentificationCodeOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?bool $hasMembership = null,
        public readonly ?bool $membershipSameUnit = null,
        public readonly ?bool $stejneStredisko = null,
        public readonly ?string $unitPerson = null,
        public readonly ?string $leader = null,
        public readonly ?string $membershipType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            hasMembership: isset($obj->{'HasMembership'}) ? (bool) $obj->{'HasMembership'} : null,
            membershipSameUnit: isset($obj->{'MembershipSameUnit'}) ? (bool) $obj->{'MembershipSameUnit'} : null,
            stejneStredisko: isset($obj->{'StejneStredisko'}) ? (bool) $obj->{'StejneStredisko'} : null,
            unitPerson: isset($obj->{'UnitPerson'}) ? (string) $obj->{'UnitPerson'} : null,
            leader: isset($obj->{'Leader'}) ? (string) $obj->{'Leader'} : null,
            membershipType: isset($obj->{'MembershipType'}) ? (string) $obj->{'MembershipType'} : null,
        );
    }
}
