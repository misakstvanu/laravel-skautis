<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EducationPersonDaysAllInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'ID' => $this->id,
            'ID_EventEducationType' => $this->idEventEducationType,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
