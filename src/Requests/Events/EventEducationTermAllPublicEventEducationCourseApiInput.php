<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationTermAllPublicEventEducationCourseApiInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idEventEducationCourse = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
