<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationCourseAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?int $idOccupation = null,
        public readonly ?string $occupation = null,
        public readonly ?int $capacityCourse = null,
        public readonly ?int $capacitySubstitute = null,
        public readonly ?string $registrationDeadline = null,
        public readonly ?int $estimatedParticipantCount = null,
        public readonly ?string $note = null,
        public readonly ?bool $isContractor = null,
        public readonly ?string $accreditationNumber = null,
        public readonly ?int $personDays = null,
        public readonly ?bool $isCustomPersonDays = null,
        public readonly ?string $displayName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            idOccupation: isset($obj->{'ID_Occupation'}) ? (int) $obj->{'ID_Occupation'} : null,
            occupation: isset($obj->{'Occupation'}) ? (string) $obj->{'Occupation'} : null,
            capacityCourse: isset($obj->{'CapacityCourse'}) ? (int) $obj->{'CapacityCourse'} : null,
            capacitySubstitute: isset($obj->{'CapacitySubstitute'}) ? (int) $obj->{'CapacitySubstitute'} : null,
            registrationDeadline: isset($obj->{'RegistrationDeadline'}) ? (string) $obj->{'RegistrationDeadline'} : null,
            estimatedParticipantCount: isset($obj->{'EstimatedParticipantCount'}) ? (int) $obj->{'EstimatedParticipantCount'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isContractor: isset($obj->{'IsContractor'}) ? (bool) $obj->{'IsContractor'} : null,
            accreditationNumber: isset($obj->{'AccreditationNumber'}) ? (string) $obj->{'AccreditationNumber'} : null,
            personDays: isset($obj->{'PersonDays'}) ? (int) $obj->{'PersonDays'} : null,
            isCustomPersonDays: isset($obj->{'IsCustomPersonDays'}) ? (bool) $obj->{'IsCustomPersonDays'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
        );
    }
}
