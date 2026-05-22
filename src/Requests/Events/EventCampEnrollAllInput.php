<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampEnrollAllInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idEventCampInvitation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'ID_EventCampInvitation' => $this->idEventCampInvitation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
