<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantEducationUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idParticipant = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?bool $isActive = null,
        public readonly ?bool $fillCondition = null,
        public readonly ?bool $isSubstitute = null,
        public readonly ?bool $isAccepted = null,
        public readonly ?string $graduated = null,
        public readonly ?string $note = null,
        public readonly ?bool $updateNote = null,
        public readonly ?string $dateLetterRequest = null,
        public readonly ?string $signOut = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Participant' => $this->idParticipant,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'DisplayName' => $this->displayName,
            'ID_EventEducationType' => $this->idEventEducationType,
            'EventEducationType' => $this->eventEducationType,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'IsActive' => $this->isActive,
            'FillCondition' => $this->fillCondition,
            'IsSubstitute' => $this->isSubstitute,
            'IsAccepted' => $this->isAccepted,
            'Graduated' => $this->graduated,
            'Note' => $this->note,
            'UpdateNote' => $this->updateNote,
            'DateLetterRequest' => $this->dateLetterRequest,
            'SignOut' => $this->signOut,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
