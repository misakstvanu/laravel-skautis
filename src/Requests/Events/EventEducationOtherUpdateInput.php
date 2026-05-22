<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationOtherUpdateInput
{
    public function __construct(
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventEducation' => $this->idEventEducation,
            'EventEducation' => $this->eventEducation,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'EventEducationCourse' => $this->eventEducationCourse,
            'IsForester' => $this->isForester,
            'IsQualifyingExam' => $this->isQualifyingExam,
            'Annotation' => $this->annotation,
            'TargetGroup' => $this->targetGroup,
            'EventFocus' => $this->eventFocus,
            'EntryConditions' => $this->entryConditions,
            'GraduateConditions' => $this->graduateConditions,
            'AuthenticationForm' => $this->authenticationForm,
            'ParticipantFee' => $this->participantFee,
            'NextOccurrenceYear' => $this->nextOccurrenceYear,
            'CourseFrequency' => $this->courseFrequency,
            'Graduates' => $this->graduates,
            'PhotoGallery' => $this->photoGallery,
            'EventHistory' => $this->eventHistory,
            'Note' => $this->note,
            'IsChildFriendly' => $this->isChildFriendly,
            'IsAgeRestricted' => $this->isAgeRestricted,
            'ShortDescription' => $this->shortDescription,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
