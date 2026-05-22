<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantEducationExamUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idParticipantEducation = null,
        public readonly ?string $dateExam = null,
        public readonly ?string $dateLetter = null,
        public readonly ?int $idEventEducationExam = null,
        public readonly ?string $letterNumber = null,
        public readonly ?bool $qualificationFailed = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'IsActive' => $this->isActive,
            'ID_Person' => $this->idPerson,
            'ID_ParticipantEducation' => $this->idParticipantEducation,
            'DateExam' => $this->dateExam,
            'DateLetter' => $this->dateLetter,
            'ID_EventEducationExam' => $this->idEventEducationExam,
            'LetterNumber' => $this->letterNumber,
            'QualificationFailed' => $this->qualificationFailed,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
