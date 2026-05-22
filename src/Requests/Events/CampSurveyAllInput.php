<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CampSurveyAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idEvent = null,
        public readonly ?int $idCampQuestion = null,
        public readonly ?int $idCampAnswer = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'ID_Event' => $this->idEvent,
            'ID_CampQuestion' => $this->idCampQuestion,
            'ID_CampAnswer' => $this->idCampAnswer,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
