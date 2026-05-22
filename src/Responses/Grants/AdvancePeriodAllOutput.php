<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class AdvancePeriodAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isActive = null,
        public readonly ?int $monthFrom = null,
        public readonly ?int $dayFrom = null,
        public readonly ?int $monthTo = null,
        public readonly ?int $dayTo = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            monthFrom: isset($obj->{'MonthFrom'}) ? (int) $obj->{'MonthFrom'} : null,
            dayFrom: isset($obj->{'DayFrom'}) ? (int) $obj->{'DayFrom'} : null,
            monthTo: isset($obj->{'MonthTo'}) ? (int) $obj->{'MonthTo'} : null,
            dayTo: isset($obj->{'DayTo'}) ? (int) $obj->{'DayTo'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
