<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampEnrollAllInvitationSPAYDInput
{
    public function __construct(
        public readonly ?int $idEventCampInvitation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCampInvitation' => $this->idEventCampInvitation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
