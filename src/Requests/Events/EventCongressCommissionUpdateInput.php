<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressCommissionUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idPerson = null,
        public readonly ?bool $isLeader = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventCongress' => $this->idEventCongress,
            'ID_Person' => $this->idPerson,
            'IsLeader' => $this->isLeader,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
