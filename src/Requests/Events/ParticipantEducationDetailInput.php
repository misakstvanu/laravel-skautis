<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantEducationDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idEventEducationCourse = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_Person' => $this->idPerson,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
