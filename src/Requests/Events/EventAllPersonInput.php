<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventAllPersonInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?string $idEventType = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_EventType' => $this->idEventType,
            'DisplayName' => $this->displayName,
            'ID_Unit' => $this->idUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
