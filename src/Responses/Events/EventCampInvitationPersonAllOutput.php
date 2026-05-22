<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCampInvitationPersonAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCampInvitation = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?string $unitFullName = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $membershipCategory = null,
        public readonly ?string $emailAddresses = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventCampInvitation: isset($obj->{'ID_EventCampInvitation'}) ? (int) $obj->{'ID_EventCampInvitation'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            unitFullName: isset($obj->{'UnitFullName'}) ? (string) $obj->{'UnitFullName'} : null,
            idMembershipCategory: isset($obj->{'ID_MembershipCategory'}) ? (string) $obj->{'ID_MembershipCategory'} : null,
            membershipCategory: isset($obj->{'MembershipCategory'}) ? (string) $obj->{'MembershipCategory'} : null,
            emailAddresses: isset($obj->{'EmailAddresses'}) ? (string) $obj->{'EmailAddresses'} : null,
        );
    }
}
