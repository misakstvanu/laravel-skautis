<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventAllPersonParticipationInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?string $idEventType = null,
        public readonly ?string $displayName = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_EventType' => $this->idEventType,
            'DisplayName' => $this->displayName,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
