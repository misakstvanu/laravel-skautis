<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class PersonPreferenceDateListInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
        public readonly ?bool $isArrive = null,
        public readonly ?bool $addNoArriveDeparture = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            'IsArrive' => $this->isArrive,
            'AddNoArriveDeparture' => $this->addNoArriveDeparture,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
