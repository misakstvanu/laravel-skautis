<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class FoodAllInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
