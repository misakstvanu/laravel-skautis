<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationLetterRequestOtherCourseDuplicatesInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventEducationExam = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventEducationExam' => $this->idEventEducationExam,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
