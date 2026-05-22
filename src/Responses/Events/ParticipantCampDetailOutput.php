<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class ParticipantCampDetailOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $estimate = null,
        public readonly ?bool $real = null,
        public readonly ?int $days = null,
        public readonly ?int $idParticipant = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idParticipantType = null,
        public readonly ?string $participantType = null,
        public readonly ?int $idEvent = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?string $eventCamp = null,
        public readonly ?int $idParticipantNumber = null,
        public readonly ?string $participantNumber = null,
        public readonly ?string $note = null,
        public readonly ?bool $canDeletePerson = null,
        public readonly ?string $accepted = null,
        public readonly ?bool $isAccepted = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            estimate: isset($obj->{'Estimate'}) ? (bool) $obj->{'Estimate'} : null,
            real: isset($obj->{'Real'}) ? (bool) $obj->{'Real'} : null,
            days: isset($obj->{'Days'}) ? (int) $obj->{'Days'} : null,
            idParticipant: isset($obj->{'ID_Participant'}) ? (int) $obj->{'ID_Participant'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idParticipantType: isset($obj->{'ID_ParticipantType'}) ? (string) $obj->{'ID_ParticipantType'} : null,
            participantType: isset($obj->{'ParticipantType'}) ? (string) $obj->{'ParticipantType'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            idEventCamp: isset($obj->{'ID_EventCamp'}) ? (int) $obj->{'ID_EventCamp'} : null,
            eventCamp: isset($obj->{'EventCamp'}) ? (string) $obj->{'EventCamp'} : null,
            idParticipantNumber: isset($obj->{'ID_ParticipantNumber'}) ? (int) $obj->{'ID_ParticipantNumber'} : null,
            participantNumber: isset($obj->{'ParticipantNumber'}) ? (string) $obj->{'ParticipantNumber'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            canDeletePerson: isset($obj->{'CanDeletePerson'}) ? (bool) $obj->{'CanDeletePerson'} : null,
            accepted: isset($obj->{'Accepted'}) ? (string) $obj->{'Accepted'} : null,
            isAccepted: isset($obj->{'IsAccepted'}) ? (bool) $obj->{'IsAccepted'} : null,
        );
    }
}
