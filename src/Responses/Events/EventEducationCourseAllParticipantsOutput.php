<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationCourseAllParticipantsOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?int $capacityCourse = null,
        public readonly ?int $participantAcceptedCount = null,
        public readonly ?int $capacitySubstitute = null,
        public readonly ?int $participantSubstituteCount = null,
        public readonly ?int $participantCount = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            capacityCourse: isset($obj->{'CapacityCourse'}) ? (int) $obj->{'CapacityCourse'} : null,
            participantAcceptedCount: isset($obj->{'ParticipantAcceptedCount'}) ? (int) $obj->{'ParticipantAcceptedCount'} : null,
            capacitySubstitute: isset($obj->{'CapacitySubstitute'}) ? (int) $obj->{'CapacitySubstitute'} : null,
            participantSubstituteCount: isset($obj->{'ParticipantSubstituteCount'}) ? (int) $obj->{'ParticipantSubstituteCount'} : null,
            participantCount: isset($obj->{'ParticipantCount'}) ? (int) $obj->{'ParticipantCount'} : null,
        );
    }
}
