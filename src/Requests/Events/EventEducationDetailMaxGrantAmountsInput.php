<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationDetailMaxGrantAmountsInput
{
    public function __construct(
        public readonly ?int $idEvent = null,
        public readonly ?int $idGrant = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Event' => $this->idEvent,
            'ID_Grant' => $this->idGrant,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
