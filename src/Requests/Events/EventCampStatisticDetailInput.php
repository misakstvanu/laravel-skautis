<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampStatisticDetailInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?bool $isEstimate = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'IsEstimate' => $this->isEstimate,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
