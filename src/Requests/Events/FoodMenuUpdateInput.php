<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class FoodMenuUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idFood = null,
        public readonly ?string $displayName = null,
        public readonly ?int $capacity = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Food' => $this->idFood,
            'DisplayName' => $this->displayName,
            'Capacity' => $this->capacity,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
