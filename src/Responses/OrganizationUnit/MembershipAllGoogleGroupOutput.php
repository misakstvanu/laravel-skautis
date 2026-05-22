<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MembershipAllGoogleGroupOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?string $membershipType = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $membershipCategory = null,
        public readonly ?string $email = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idMembershipType: isset($obj->{'ID_MembershipType'}) ? (string) $obj->{'ID_MembershipType'} : null,
            membershipType: isset($obj->{'MembershipType'}) ? (string) $obj->{'MembershipType'} : null,
            idMembershipCategory: isset($obj->{'ID_MembershipCategory'}) ? (string) $obj->{'ID_MembershipCategory'} : null,
            membershipCategory: isset($obj->{'MembershipCategory'}) ? (string) $obj->{'MembershipCategory'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
        );
    }
}
