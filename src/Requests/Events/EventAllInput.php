<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventAllInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $year = null,
        public readonly ?string $idEventState = null,
        public readonly ?bool $isFuture = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'Year' => $this->year,
            'ID_EventState' => $this->idEventState,
            'IsFuture' => $this->isFuture,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}

