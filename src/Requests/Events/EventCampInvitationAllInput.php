<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampInvitationAllInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?int $id = null,
        public readonly ?int $idPersonSender = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'ID' => $this->id,
            'ID_PersonSender' => $this->idPersonSender,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
