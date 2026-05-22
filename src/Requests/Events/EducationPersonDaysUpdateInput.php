<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EducationPersonDaysUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?int $personDays = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventEducationType' => $this->idEventEducationType,
            'EventEducationType' => $this->eventEducationType,
            'PersonDays' => $this->personDays,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
