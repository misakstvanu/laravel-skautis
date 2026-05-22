<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressDecisionInsertInput
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventCongress' => $this->idEventCongress,
            'IsSuggest' => $this->isSuggest,
            'Suggester' => $this->suggester,
            'ID_EventCongressDecisionType' => $this->idEventCongressDecisionType,
            'EventCongressDecisionType' => $this->eventCongressDecisionType,
            'ID_UnitType' => $this->idUnitType,
            'UnitType' => $this->unitType,
            'Text' => $this->text,
            'Decision' => $this->decision,
            'ID_PersonCreated' => $this->idPersonCreated,
            'PersonCreated' => $this->personCreated,
            'DateCreated' => $this->dateCreated,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
