<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class ParticipantGeneralDetailOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventGeneral = null,
        public readonly ?int $idParticipant = null,
        public readonly ?int $days = null,
        public readonly ?string $note = null,
        public readonly ?string $eventGeneral = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?bool $canDeletePerson = null,
        public readonly ?string $birthday = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventGeneral: isset($obj->{'ID_EventGeneral'}) ? (int) $obj->{'ID_EventGeneral'} : null,
            idParticipant: isset($obj->{'ID_Participant'}) ? (int) $obj->{'ID_Participant'} : null,
            days: isset($obj->{'Days'}) ? (int) $obj->{'Days'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            eventGeneral: isset($obj->{'EventGeneral'}) ? (string) $obj->{'EventGeneral'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            canDeletePerson: isset($obj->{'CanDeletePerson'}) ? (bool) $obj->{'CanDeletePerson'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            state: isset($obj->{'State'}) ? (string) $obj->{'State'} : null,
        );
    }
}
