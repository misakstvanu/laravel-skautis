<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantCampAllInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?bool $estimate = null,
        public readonly ?bool $real = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'Estimate' => $this->estimate,
            'Real' => $this->real,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
