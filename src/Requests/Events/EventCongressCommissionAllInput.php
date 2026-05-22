<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressCommissionAllInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idPerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            'ID_Person' => $this->idPerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
