<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantInsertCreateRemainingInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEvent = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idEventEducationCourse = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'ID_Event' => $this->idEvent,
            'ID_Unit' => $this->idUnit,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
