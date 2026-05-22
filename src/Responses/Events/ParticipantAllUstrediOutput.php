<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class ParticipantAllUstrediOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idParticipantType = null,
        public readonly ?string $participantType = null,
        public readonly ?bool $isManual = null,
        public readonly ?bool $hasPreference = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idParticipantType: isset($obj->{'ID_ParticipantType'}) ? (string) $obj->{'ID_ParticipantType'} : null,
            participantType: isset($obj->{'ParticipantType'}) ? (string) $obj->{'ParticipantType'} : null,
            isManual: isset($obj->{'IsManual'}) ? (bool) $obj->{'IsManual'} : null,
            hasPreference: isset($obj->{'HasPreference'}) ? (bool) $obj->{'HasPreference'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
