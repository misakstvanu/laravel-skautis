<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CampSurveyInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $event = null,
        public readonly ?int $idCampQuestion = null,
        public readonly ?string $campQuestion = null,
        public readonly ?int $idCampAnswer = null,
        public readonly ?string $answers = null,
        public readonly ?string $freeAnswer = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'ID_Event' => $this->idEvent,
            'Event' => $this->event,
            'ID_CampQuestion' => $this->idCampQuestion,
            'CampQuestion' => $this->campQuestion,
            'ID_CampAnswer' => $this->idCampAnswer,
            'Answers' => $this->answers,
            'FreeAnswer' => $this->freeAnswer,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
