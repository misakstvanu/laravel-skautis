<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampStatementDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?bool $isRevenue = null,
        public readonly ?int $idEventCampStatementType = null,
        public readonly ?string $eventCampStatementType = null,
        public readonly ?float $ammount = null,
        public readonly ?bool $isEstimate = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventCamp' => $this->idEventCamp,
            'IsRevenue' => $this->isRevenue,
            'ID_EventCampStatementType' => $this->idEventCampStatementType,
            'EventCampStatementType' => $this->eventCampStatementType,
            'Ammount' => $this->ammount,
            'IsEstimate' => $this->isEstimate,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
