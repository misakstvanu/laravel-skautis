<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantInsertInput
{
    public function __construct(
        public readonly ?string $idGrantType = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEvent = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?int $year = null,
        public readonly ?string $projectName = null,
        public readonly ?int $idPersonLeader = null,
        public readonly ?string $noteLeader = null,
        public readonly ?int $idPersonEconomist = null,
        public readonly ?string $noteEconomist = null,
        public readonly ?int $idPersonResponsible = null,
        public readonly ?string $noteResponsible = null,
        public readonly ?bool $createRemaining = null,
        public readonly ?string $realizationFrom = null,
        public readonly ?string $realizationTo = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_GrantType' => $this->idGrantType,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_Event' => $this->idEvent,
            'ID_Unit' => $this->idUnit,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'Year' => $this->year,
            'ProjectName' => $this->projectName,
            'ID_PersonLeader' => $this->idPersonLeader,
            'NoteLeader' => $this->noteLeader,
            'ID_PersonEconomist' => $this->idPersonEconomist,
            'NoteEconomist' => $this->noteEconomist,
            'ID_PersonResponsible' => $this->idPersonResponsible,
            'NoteResponsible' => $this->noteResponsible,
            'CreateRemaining' => $this->createRemaining,
            'RealizationFrom' => $this->realizationFrom,
            'RealizationTo' => $this->realizationTo,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
