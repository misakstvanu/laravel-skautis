<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class ParticipantCampAllEventCampEnrollOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idParticipant = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $birthday = null,
        public readonly ?int $age = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $membershipCategory = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?string $unitFullName = null,
        public readonly ?float $price = null,
        public readonly ?string $paymentTerm = null,
        public readonly ?string $requestSent = null,
        public readonly ?string $date = null,
        public readonly ?int $idEventCampEnroll = null,
        public readonly ?string $eventCampEnroll = null,
        public readonly ?string $idCampEnrollState = null,
        public readonly ?string $campEnrollState = null,
        public readonly ?string $icon = null,
        public readonly ?string $iconClass = null,
        public readonly ?bool $canBeInvited = null,
        public readonly ?string $campOnlineLogin = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idParticipant: isset($obj->{'ID_Participant'}) ? (int) $obj->{'ID_Participant'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            age: isset($obj->{'Age'}) ? (int) $obj->{'Age'} : null,
            idMembershipCategory: isset($obj->{'ID_MembershipCategory'}) ? (string) $obj->{'ID_MembershipCategory'} : null,
            membershipCategory: isset($obj->{'MembershipCategory'}) ? (string) $obj->{'MembershipCategory'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            unitFullName: isset($obj->{'UnitFullName'}) ? (string) $obj->{'UnitFullName'} : null,
            price: isset($obj->{'Price'}) ? (float) $obj->{'Price'} : null,
            paymentTerm: isset($obj->{'PaymentTerm'}) ? (string) $obj->{'PaymentTerm'} : null,
            requestSent: isset($obj->{'RequestSent'}) ? (string) $obj->{'RequestSent'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            idEventCampEnroll: isset($obj->{'ID_EventCampEnroll'}) ? (int) $obj->{'ID_EventCampEnroll'} : null,
            eventCampEnroll: isset($obj->{'EventCampEnroll'}) ? (string) $obj->{'EventCampEnroll'} : null,
            idCampEnrollState: isset($obj->{'ID_CampEnrollState'}) ? (string) $obj->{'ID_CampEnrollState'} : null,
            campEnrollState: isset($obj->{'CampEnrollState'}) ? (string) $obj->{'CampEnrollState'} : null,
            icon: isset($obj->{'Icon'}) ? (string) $obj->{'Icon'} : null,
            iconClass: isset($obj->{'IconClass'}) ? (string) $obj->{'IconClass'} : null,
            canBeInvited: isset($obj->{'CanBeInvited'}) ? (bool) $obj->{'CanBeInvited'} : null,
            campOnlineLogin: isset($obj->{'CampOnlineLogin'}) ? (string) $obj->{'CampOnlineLogin'} : null,
        );
    }
}
