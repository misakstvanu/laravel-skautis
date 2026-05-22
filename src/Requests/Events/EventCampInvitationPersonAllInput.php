<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampInvitationPersonAllInput
{
    public function __construct(
        public readonly ?int $idEventCampInvitation = null,
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCampInvitation' => $this->idEventCampInvitation,
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
