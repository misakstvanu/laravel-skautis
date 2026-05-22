<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventGeneralStatementAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventGeneralStatementType = null,
        public readonly ?bool $isRevenue = null,
        public readonly ?string $eventGeneralStatementType = null,
        public readonly ?float $ammount = null,
        public readonly ?float $ammountPerson = null,
        public readonly ?float $ammountPersonDay = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventGeneralStatementType: isset($obj->{'ID_EventGeneralStatementType'}) ? (int) $obj->{'ID_EventGeneralStatementType'} : null,
            isRevenue: isset($obj->{'IsRevenue'}) ? (bool) $obj->{'IsRevenue'} : null,
            eventGeneralStatementType: isset($obj->{'EventGeneralStatementType'}) ? (string) $obj->{'EventGeneralStatementType'} : null,
            ammount: isset($obj->{'Ammount'}) ? (float) $obj->{'Ammount'} : null,
            ammountPerson: isset($obj->{'AmmountPerson'}) ? (float) $obj->{'AmmountPerson'} : null,
            ammountPersonDay: isset($obj->{'AmmountPersonDay'}) ? (float) $obj->{'AmmountPersonDay'} : null,
        );
    }
}
