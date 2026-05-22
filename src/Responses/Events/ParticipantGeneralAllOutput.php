<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class ParticipantGeneralAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventGeneral = null,
        public readonly ?int $idParticipant = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $age = null,
        public readonly ?string $birthday = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?int $days = null,
        public readonly ?string $note = null,
        public readonly ?string $participantCategory = null,
        public readonly ?bool $canDelete = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventGeneral: isset($obj->{'ID_EventGeneral'}) ? (int) $obj->{'ID_EventGeneral'} : null,
            idParticipant: isset($obj->{'ID_Participant'}) ? (int) $obj->{'ID_Participant'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            age: isset($obj->{'Age'}) ? (int) $obj->{'Age'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            state: isset($obj->{'State'}) ? (string) $obj->{'State'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            days: isset($obj->{'Days'}) ? (int) $obj->{'Days'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            participantCategory: isset($obj->{'ParticipantCategory'}) ? (string) $obj->{'ParticipantCategory'} : null,
            canDelete: isset($obj->{'CanDelete'}) ? (bool) $obj->{'CanDelete'} : null,
        );
    }
}
