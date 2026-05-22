<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CampAnswerAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idCampQuestion = null,
        public readonly ?int $idEventCamp = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_CampQuestion' => $this->idCampQuestion,
            'ID_EventCamp' => $this->idEventCamp,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
