<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationCourseAllInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEvent = null,
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?int $idOccupation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'ID_Event' => $this->idEvent,
            'ID' => $this->id,
            'ID_EventEducationType' => $this->idEventEducationType,
            'ID_Occupation' => $this->idOccupation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
