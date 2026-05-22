<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantCampAllEventCampExportHealthCardInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?int $idPerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'ID_Person' => $this->idPerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
