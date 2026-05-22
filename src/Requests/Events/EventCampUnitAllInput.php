<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampUnitAllInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?int $idUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'ID_Unit' => $this->idUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
