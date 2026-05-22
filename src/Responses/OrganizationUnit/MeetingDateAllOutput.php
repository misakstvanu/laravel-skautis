<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MeetingDateAllOutput
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
        public readonly ?bool $isUsed = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idWeekDay: isset($obj->{'ID_WeekDay'}) ? (string) $obj->{'ID_WeekDay'} : null,
            weekDay: isset($obj->{'WeekDay'}) ? (string) $obj->{'WeekDay'} : null,
            timeFrom: $obj->{'TimeFrom'} ?? null,
            timeTo: $obj->{'TimeTo'} ?? null,
            periodicity: isset($obj->{'Periodicity'}) ? (string) $obj->{'Periodicity'} : null,
            idOccupation: isset($obj->{'ID_Occupation'}) ? (int) $obj->{'ID_Occupation'} : null,
            occupation: isset($obj->{'Occupation'}) ? (string) $obj->{'Occupation'} : null,
            isUsed: isset($obj->{'IsUsed'}) ? (bool) $obj->{'IsUsed'} : null,
        );
    }
}
