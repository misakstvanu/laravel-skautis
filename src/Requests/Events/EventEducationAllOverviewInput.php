<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationAllOverviewInput
{
    public function __construct(
        public readonly ?string $idEventEducationType = null,
        public readonly ?string $idEventEducationState = null,
        public readonly ?string $idGrantState = null,
        public readonly ?string $idEventEducationCommissionState = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducationType' => $this->idEventEducationType,
            'ID_EventEducationState' => $this->idEventEducationState,
            'ID_GrantState' => $this->idGrantState,
            'ID_EventEducationCommissionState' => $this->idEventEducationCommissionState,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
