<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class AccommodationParticipantTypeAllInput
{
    public function __construct(
        public readonly ?int $idAccommodation = null,
        public readonly ?string $idParticipantType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Accommodation' => $this->idAccommodation,
            'ID_ParticipantType' => $this->idParticipantType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
