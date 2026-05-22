<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationCourseAllGrantExportOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $duration = null,
        public readonly ?int $participantCount = null,
        public readonly ?string $term = null,
        public readonly ?string $place = null,
        public readonly ?int $personDays = null,
        public readonly ?float $maxGrant = null,
        public readonly ?int $order = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            duration: isset($obj->{'Duration'}) ? (int) $obj->{'Duration'} : null,
            participantCount: isset($obj->{'ParticipantCount'}) ? (int) $obj->{'ParticipantCount'} : null,
            term: isset($obj->{'Term'}) ? (string) $obj->{'Term'} : null,
            place: isset($obj->{'Place'}) ? (string) $obj->{'Place'} : null,
            personDays: isset($obj->{'PersonDays'}) ? (int) $obj->{'PersonDays'} : null,
            maxGrant: isset($obj->{'MaxGrant'}) ? (float) $obj->{'MaxGrant'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
        );
    }
}
