<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventAllPersonParticipationOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $startDate = null,
        public readonly ?string $endDate = null,
        public readonly ?int $year = null,
        public readonly ?string $idEventType = null,
        public readonly ?string $eventType = null,
        public readonly ?string $idParticipationType = null,
        public readonly ?string $participationType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            startDate: isset($obj->{'StartDate'}) ? (string) $obj->{'StartDate'} : null,
            endDate: isset($obj->{'EndDate'}) ? (string) $obj->{'EndDate'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            idEventType: isset($obj->{'ID_EventType'}) ? (string) $obj->{'ID_EventType'} : null,
            eventType: isset($obj->{'EventType'}) ? (string) $obj->{'EventType'} : null,
            idParticipationType: isset($obj->{'ID_ParticipationType'}) ? (string) $obj->{'ID_ParticipationType'} : null,
            participationType: isset($obj->{'ParticipationType'}) ? (string) $obj->{'ParticipationType'} : null,
        );
    }
}
