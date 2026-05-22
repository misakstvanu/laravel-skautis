<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampStatementAllInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?bool $isEstimate = null,
        public readonly ?bool $isRevenue = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'IsEstimate' => $this->isEstimate,
            'IsRevenue' => $this->isRevenue,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
