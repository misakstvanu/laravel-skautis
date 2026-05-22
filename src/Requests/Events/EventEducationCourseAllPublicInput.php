<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationCourseAllPublicInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idOccupancy = null,
        public readonly ?int $minParticipants = null,
        public readonly ?int $maxParticipants = null,
        public readonly ?bool $hasFreeSlot = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Occupancy' => $this->idOccupancy,
            'MinParticipants' => $this->minParticipants,
            'MaxParticipants' => $this->maxParticipants,
            'HasFreeSlot' => $this->hasFreeSlot,
            'ID_EventEducation' => $this->idEventEducation,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
