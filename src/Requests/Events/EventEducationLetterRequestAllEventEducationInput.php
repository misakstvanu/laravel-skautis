<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationLetterRequestAllEventEducationInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idParticipantEducationExam = null,
        public readonly ?string $idEventEducationLetterRequestState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_ParticipantEducationExam' => $this->idParticipantEducationExam,
            'ID_EventEducationLetterRequestState' => $this->idEventEducationLetterRequestState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
