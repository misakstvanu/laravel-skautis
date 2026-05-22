<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MeetingDateUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $idWeekDay = null,
        public readonly ?string $weekDay = null,
        public readonly mixed $timeFrom = null,
        public readonly mixed $timeTo = null,
        public readonly ?string $periodicity = null,
        public readonly ?int $idOccupation = null,
        public readonly ?string $occupation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'ID_WeekDay' => $this->idWeekDay,
            'WeekDay' => $this->weekDay,
            'TimeFrom' => $this->timeFrom,
            'TimeTo' => $this->timeTo,
            'Periodicity' => $this->periodicity,
            'ID_Occupation' => $this->idOccupation,
            'Occupation' => $this->occupation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
