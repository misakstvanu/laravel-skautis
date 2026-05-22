<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampBudgetUpdateInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?int $idEventCampBudget = null,
        public readonly ?float $real = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'ID_EventCampBudget' => $this->idEventCampBudget,
            'Real' => $this->real,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}

