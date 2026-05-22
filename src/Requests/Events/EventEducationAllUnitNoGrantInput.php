<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationAllUnitNoGrantInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?string $idEventType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID_EventType' => $this->idEventType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
