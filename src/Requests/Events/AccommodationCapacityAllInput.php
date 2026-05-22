<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class AccommodationCapacityAllInput
{
    public function __construct(
        public readonly ?int $idAccommodation = null,
        public readonly ?int $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Accommodation' => $this->idAccommodation,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
