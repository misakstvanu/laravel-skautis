<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class AccommodationCapacityUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idAccommodation = null,
        public readonly ?string $accommodation = null,
        public readonly ?string $date = null,
        public readonly ?int $capacity = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Accommodation' => $this->idAccommodation,
            'Accommodation' => $this->accommodation,
            'Date' => $this->date,
            'Capacity' => $this->capacity,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
