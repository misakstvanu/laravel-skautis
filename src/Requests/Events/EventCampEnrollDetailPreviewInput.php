<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampEnrollDetailPreviewInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?int $idCampOnlineLogin = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'ID_CampOnlineLogin' => $this->idCampOnlineLogin,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
