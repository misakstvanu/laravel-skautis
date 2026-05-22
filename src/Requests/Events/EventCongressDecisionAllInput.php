<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressDecisionAllInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
        public readonly ?int $id = null,
        public readonly ?string $idEventCongressDecisionType = null,
        public readonly ?string $idUnitType = null,
        public readonly ?int $idPersonCreated = null,
        public readonly ?bool $isSuggest = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            'ID' => $this->id,
            'ID_EventCongressDecisionType' => $this->idEventCongressDecisionType,
            'ID_UnitType' => $this->idUnitType,
            'ID_PersonCreated' => $this->idPersonCreated,
            'IsSuggest' => $this->isSuggest,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
