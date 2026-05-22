<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MeetingDateAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idOccupation = null,
        public readonly ?string $idWeekDay = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Unit' => $this->idUnit,
            'ID_Occupation' => $this->idOccupation,
            'ID_WeekDay' => $this->idWeekDay,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
