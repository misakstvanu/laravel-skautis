<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationCourseDetailPublicOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $eventEducation = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?int $idEventEducationOther = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?int $idOccupancy = null,
        public readonly ?string $occupancy = null,
        public readonly ?int $capacityCourse = null,
        public readonly ?int $capacitySubstitute = null,
        public readonly ?string $registrationDeadline = null,
        public readonly ?bool $hasFreeSlots = null,
        public readonly ?string $entryConditions = null,
        public readonly ?string $graduateConditions = null,
        public readonly ?float $participantFee = null,
        public readonly ?int $lastOccurrenceYear = null,
        public readonly ?int $nextOccurrenceYear = null,
        public readonly ?string $courseFrequency = null,
        public readonly ?int $idPersonLeader = null,
        public readonly ?string $personLeader = null,
        public readonly ?string $annotation = null,
        public readonly ?string $eventFocus = null,
        public readonly ?string $photoGallery = null,
        public readonly ?string $authenticationForm = null,
        public readonly ?bool $isAccredited = null,
        public readonly ?string $eventHistory = null,
        public readonly ?float $fulfillment = null,
        public readonly ?string $displayName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            eventEducation: isset($obj->{'EventEducation'}) ? (string) $obj->{'EventEducation'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            idEventEducationOther: isset($obj->{'ID_EventEducationOther'}) ? (int) $obj->{'ID_EventEducationOther'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            idOccupancy: isset($obj->{'ID_Occupancy'}) ? (int) $obj->{'ID_Occupancy'} : null,
            occupancy: isset($obj->{'Occupancy'}) ? (string) $obj->{'Occupancy'} : null,
            capacityCourse: isset($obj->{'CapacityCourse'}) ? (int) $obj->{'CapacityCourse'} : null,
            capacitySubstitute: isset($obj->{'CapacitySubstitute'}) ? (int) $obj->{'CapacitySubstitute'} : null,
            registrationDeadline: isset($obj->{'RegistrationDeadline'}) ? (string) $obj->{'RegistrationDeadline'} : null,
            hasFreeSlots: isset($obj->{'HasFreeSlots'}) ? (bool) $obj->{'HasFreeSlots'} : null,
            entryConditions: isset($obj->{'EntryConditions'}) ? (string) $obj->{'EntryConditions'} : null,
            graduateConditions: isset($obj->{'GraduateConditions'}) ? (string) $obj->{'GraduateConditions'} : null,
            participantFee: isset($obj->{'ParticipantFee'}) ? (float) $obj->{'ParticipantFee'} : null,
            lastOccurrenceYear: isset($obj->{'LastOccurrenceYear'}) ? (int) $obj->{'LastOccurrenceYear'} : null,
            nextOccurrenceYear: isset($obj->{'NextOccurrenceYear'}) ? (int) $obj->{'NextOccurrenceYear'} : null,
            courseFrequency: isset($obj->{'CourseFrequency'}) ? (string) $obj->{'CourseFrequency'} : null,
            idPersonLeader: isset($obj->{'ID_PersonLeader'}) ? (int) $obj->{'ID_PersonLeader'} : null,
            personLeader: isset($obj->{'PersonLeader'}) ? (string) $obj->{'PersonLeader'} : null,
            annotation: isset($obj->{'Annotation'}) ? (string) $obj->{'Annotation'} : null,
            eventFocus: isset($obj->{'EventFocus'}) ? (string) $obj->{'EventFocus'} : null,
            photoGallery: isset($obj->{'PhotoGallery'}) ? (string) $obj->{'PhotoGallery'} : null,
            authenticationForm: isset($obj->{'AuthenticationForm'}) ? (string) $obj->{'AuthenticationForm'} : null,
            isAccredited: isset($obj->{'IsAccredited'}) ? (bool) $obj->{'IsAccredited'} : null,
            eventHistory: isset($obj->{'EventHistory'}) ? (string) $obj->{'EventHistory'} : null,
            fulfillment: isset($obj->{'Fulfillment'}) ? (float) $obj->{'Fulfillment'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
        );
    }
}
