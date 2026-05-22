<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationOtherDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $eventEducation = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?string $eventEducationCourse = null,
        public readonly ?bool $isForester = null,
        public readonly ?bool $isQualifyingExam = null,
        public readonly ?string $annotation = null,
        public readonly ?string $targetGroup = null,
        public readonly ?string $eventFocus = null,
        public readonly ?string $entryConditions = null,
        public readonly ?string $graduateConditions = null,
        public readonly ?string $authenticationForm = null,
        public readonly ?float $participantFee = null,
        public readonly ?int $nextOccurrenceYear = null,
        public readonly ?string $courseFrequency = null,
        public readonly ?int $graduates = null,
        public readonly ?string $photoGallery = null,
        public readonly ?string $eventHistory = null,
        public readonly ?string $note = null,
        public readonly ?bool $isChildFriendly = null,
        public readonly ?bool $isAgeRestricted = null,
        public readonly ?string $shortDescription = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            eventEducation: isset($obj->{'EventEducation'}) ? (string) $obj->{'EventEducation'} : null,
            idEventEducationCourse: isset($obj->{'ID_EventEducationCourse'}) ? (int) $obj->{'ID_EventEducationCourse'} : null,
            eventEducationCourse: isset($obj->{'EventEducationCourse'}) ? (string) $obj->{'EventEducationCourse'} : null,
            isForester: isset($obj->{'IsForester'}) ? (bool) $obj->{'IsForester'} : null,
            isQualifyingExam: isset($obj->{'IsQualifyingExam'}) ? (bool) $obj->{'IsQualifyingExam'} : null,
            annotation: isset($obj->{'Annotation'}) ? (string) $obj->{'Annotation'} : null,
            targetGroup: isset($obj->{'TargetGroup'}) ? (string) $obj->{'TargetGroup'} : null,
            eventFocus: isset($obj->{'EventFocus'}) ? (string) $obj->{'EventFocus'} : null,
            entryConditions: isset($obj->{'EntryConditions'}) ? (string) $obj->{'EntryConditions'} : null,
            graduateConditions: isset($obj->{'GraduateConditions'}) ? (string) $obj->{'GraduateConditions'} : null,
            authenticationForm: isset($obj->{'AuthenticationForm'}) ? (string) $obj->{'AuthenticationForm'} : null,
            participantFee: isset($obj->{'ParticipantFee'}) ? (float) $obj->{'ParticipantFee'} : null,
            nextOccurrenceYear: isset($obj->{'NextOccurrenceYear'}) ? (int) $obj->{'NextOccurrenceYear'} : null,
            courseFrequency: isset($obj->{'CourseFrequency'}) ? (string) $obj->{'CourseFrequency'} : null,
            graduates: isset($obj->{'Graduates'}) ? (int) $obj->{'Graduates'} : null,
            photoGallery: isset($obj->{'PhotoGallery'}) ? (string) $obj->{'PhotoGallery'} : null,
            eventHistory: isset($obj->{'EventHistory'}) ? (string) $obj->{'EventHistory'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isChildFriendly: isset($obj->{'IsChildFriendly'}) ? (bool) $obj->{'IsChildFriendly'} : null,
            isAgeRestricted: isset($obj->{'IsAgeRestricted'}) ? (bool) $obj->{'IsAgeRestricted'} : null,
            shortDescription: isset($obj->{'ShortDescription'}) ? (string) $obj->{'ShortDescription'} : null,
        );
    }
}
