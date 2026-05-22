<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class FoodInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?string $day = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventCongress' => $this->idEventCongress,
            'Day' => $this->day,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
