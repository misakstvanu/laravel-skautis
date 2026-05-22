<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonAllEventCampMultiOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $birthDay = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $unit = null,
        public readonly ?string $membershipType = null,
        public readonly ?string $membershipCategory = null,
        public readonly ?bool $isParticipant = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            birthDay: isset($obj->{'BirthDay'}) ? (string) $obj->{'BirthDay'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            membershipType: isset($obj->{'MembershipType'}) ? (string) $obj->{'MembershipType'} : null,
            membershipCategory: isset($obj->{'MembershipCategory'}) ? (string) $obj->{'MembershipCategory'} : null,
            isParticipant: isset($obj->{'IsParticipant'}) ? (bool) $obj->{'IsParticipant'} : null,
        );
    }
}
