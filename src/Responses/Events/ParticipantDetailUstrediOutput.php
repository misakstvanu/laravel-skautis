<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class ParticipantDetailUstrediOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idParticipantType = null,
        public readonly ?string $participantType = null,
        public readonly ?int $idEvent = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?string $eventCongress = null,
        public readonly ?int $idParticipantNumber = null,
        public readonly ?string $participantNumber = null,
        public readonly ?string $note = null,
        public readonly ?bool $canDeletePerson = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idParticipantType: isset($obj->{'ID_ParticipantType'}) ? (string) $obj->{'ID_ParticipantType'} : null,
            participantType: isset($obj->{'ParticipantType'}) ? (string) $obj->{'ParticipantType'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            idEventCongress: isset($obj->{'ID_EventCongress'}) ? (int) $obj->{'ID_EventCongress'} : null,
            eventCongress: isset($obj->{'EventCongress'}) ? (string) $obj->{'EventCongress'} : null,
            idParticipantNumber: isset($obj->{'ID_ParticipantNumber'}) ? (int) $obj->{'ID_ParticipantNumber'} : null,
            participantNumber: isset($obj->{'ParticipantNumber'}) ? (string) $obj->{'ParticipantNumber'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            canDeletePerson: isset($obj->{'CanDeletePerson'}) ? (bool) $obj->{'CanDeletePerson'} : null,
        );
    }
}
