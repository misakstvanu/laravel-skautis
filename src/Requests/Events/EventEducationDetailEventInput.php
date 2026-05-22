<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationDetailEventInput
{
    public function __construct(
        public readonly ?int $idEvent = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Event' => $this->idEvent,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
