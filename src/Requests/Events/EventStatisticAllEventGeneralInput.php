<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventStatisticAllEventGeneralInput
{
    public function __construct(
        public readonly ?int $idEventGeneral = null,
        public readonly ?int $idParticipantCategory = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventGeneral' => $this->idEventGeneral,
            'ID_ParticipantCategory' => $this->idParticipantCategory,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
