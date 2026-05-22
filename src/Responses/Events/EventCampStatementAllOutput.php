<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCampStatementAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCampStatementType = null,
        public readonly ?bool $isRevenue = null,
        public readonly ?string $eventCampStatementType = null,
        public readonly ?float $ammount = null,
        public readonly ?float $ammountPerson = null,
        public readonly ?float $ammountPersonDay = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventCampStatementType: isset($obj->{'ID_EventCampStatementType'}) ? (int) $obj->{'ID_EventCampStatementType'} : null,
            isRevenue: isset($obj->{'IsRevenue'}) ? (bool) $obj->{'IsRevenue'} : null,
            eventCampStatementType: isset($obj->{'EventCampStatementType'}) ? (string) $obj->{'EventCampStatementType'} : null,
            ammount: isset($obj->{'Ammount'}) ? (float) $obj->{'Ammount'} : null,
            ammountPerson: isset($obj->{'AmmountPerson'}) ? (float) $obj->{'AmmountPerson'} : null,
            ammountPersonDay: isset($obj->{'AmmountPersonDay'}) ? (float) $obj->{'AmmountPersonDay'} : null,
        );
    }
}
