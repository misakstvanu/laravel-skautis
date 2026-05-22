<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationCourseTermAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?int $idEventEducationTerm = null,
        public readonly ?int $idEventEducation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'ID_EventEducationTerm' => $this->idEventEducationTerm,
            'ID_EventEducation' => $this->idEventEducation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
