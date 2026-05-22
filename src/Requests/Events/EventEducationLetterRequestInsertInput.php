<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationLetterRequestInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idParticipantEducationExam = null,
        public readonly ?int $idParticipantEducation = null,
        public readonly ?string $idEventEducationLetterRequestState = null,
        public readonly ?string $eventEducationLetterRequestState = null,
        public readonly ?string $date = null,
        public readonly ?string $dateSent = null,
        public readonly ?string $letterNumber = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_ParticipantEducationExam' => $this->idParticipantEducationExam,
            'ID_ParticipantEducation' => $this->idParticipantEducation,
            'ID_EventEducationLetterRequestState' => $this->idEventEducationLetterRequestState,
            'EventEducationLetterRequestState' => $this->eventEducationLetterRequestState,
            'Date' => $this->date,
            'DateSent' => $this->dateSent,
            'LetterNumber' => $this->letterNumber,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
