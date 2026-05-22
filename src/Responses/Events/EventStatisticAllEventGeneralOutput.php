<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventStatisticAllEventGeneralOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idParticipantCategory = null,
        public readonly ?string $participantCategory = null,
        public readonly ?int $count = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idParticipantCategory: isset($obj->{'ID_ParticipantCategory'}) ? (int) $obj->{'ID_ParticipantCategory'} : null,
            participantCategory: isset($obj->{'ParticipantCategory'}) ? (string) $obj->{'ParticipantCategory'} : null,
            count: isset($obj->{'Count'}) ? (int) $obj->{'Count'} : null,
        );
    }
}
