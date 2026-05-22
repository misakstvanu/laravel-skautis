<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampEnrollAllExportEnrollInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?int $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
