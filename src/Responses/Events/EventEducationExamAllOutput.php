<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationExamAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $qualificationType = null,
        public readonly ?string $qualificationTypeKey = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $capacity = null,
        public readonly ?string $date = null,
        public readonly ?int $participantCount = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            idQualificationType: isset($obj->{'ID_QualificationType'}) ? (int) $obj->{'ID_QualificationType'} : null,
            qualificationType: isset($obj->{'QualificationType'}) ? (string) $obj->{'QualificationType'} : null,
            qualificationTypeKey: isset($obj->{'QualificationTypeKey'}) ? (string) $obj->{'QualificationTypeKey'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            capacity: isset($obj->{'Capacity'}) ? (int) $obj->{'Capacity'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            participantCount: isset($obj->{'ParticipantCount'}) ? (int) $obj->{'ParticipantCount'} : null,
        );
    }
}
