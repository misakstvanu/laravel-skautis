<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressDecisionAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?bool $isSuggest = null,
        public readonly ?string $suggester = null,
        public readonly ?string $idEventCongressDecisionType = null,
        public readonly ?string $eventCongressDecisionType = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
        public readonly ?string $text = null,
        public readonly ?string $decision = null,
        public readonly ?int $idPersonCreated = null,
        public readonly ?string $personCreated = null,
        public readonly ?string $dateCreated = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventCongress: isset($obj->{'ID_EventCongress'}) ? (int) $obj->{'ID_EventCongress'} : null,
            isSuggest: isset($obj->{'IsSuggest'}) ? (bool) $obj->{'IsSuggest'} : null,
            suggester: isset($obj->{'Suggester'}) ? (string) $obj->{'Suggester'} : null,
            idEventCongressDecisionType: isset($obj->{'ID_EventCongressDecisionType'}) ? (string) $obj->{'ID_EventCongressDecisionType'} : null,
            eventCongressDecisionType: isset($obj->{'EventCongressDecisionType'}) ? (string) $obj->{'EventCongressDecisionType'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
            text: isset($obj->{'Text'}) ? (string) $obj->{'Text'} : null,
            decision: isset($obj->{'Decision'}) ? (string) $obj->{'Decision'} : null,
            idPersonCreated: isset($obj->{'ID_PersonCreated'}) ? (int) $obj->{'ID_PersonCreated'} : null,
            personCreated: isset($obj->{'PersonCreated'}) ? (string) $obj->{'PersonCreated'} : null,
            dateCreated: isset($obj->{'DateCreated'}) ? (string) $obj->{'DateCreated'} : null,
        );
    }
}
