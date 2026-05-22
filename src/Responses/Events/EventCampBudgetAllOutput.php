<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCampBudgetAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?string $idEventCampBudgetType = null,
        public readonly ?string $eventCampBudgetType = null,
        public readonly ?float $real = null,
        public readonly ?float $budgeted = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventCamp: isset($obj->{'ID_EventCamp'}) ? (int) $obj->{'ID_EventCamp'} : null,
            idEventCampBudgetType: isset($obj->{'ID_EventCampBudgetType'}) ? (string) $obj->{'ID_EventCampBudgetType'} : null,
            eventCampBudgetType: isset($obj->{'EventCampBudgetType'}) ? (string) $obj->{'EventCampBudgetType'} : null,
            real: isset($obj->{'Real'}) ? (float) $obj->{'Real'} : null,
            budgeted: isset($obj->{'Budgeted'}) ? (float) $obj->{'Budgeted'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}

