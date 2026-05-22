<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationOtherDetailInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventEducationCourse = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
