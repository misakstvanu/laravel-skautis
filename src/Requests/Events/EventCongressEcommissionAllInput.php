<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressEcommissionAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idParticipant = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idPerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Participant' => $this->idParticipant,
            'ID_EventCongress' => $this->idEventCongress,
            'ID_Person' => $this->idPerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
