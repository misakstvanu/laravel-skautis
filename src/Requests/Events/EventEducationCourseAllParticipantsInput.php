<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationCourseAllParticipantsInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
