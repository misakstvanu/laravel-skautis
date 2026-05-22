<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantDetailParticipationOverviewInput
{
    public function __construct(
        public readonly ?int $idGrant = null,
        public readonly ?int $idEvent = null,
        public readonly ?int $year = null,
        public readonly ?bool $isEstimation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Grant' => $this->idGrant,
            'ID_Event' => $this->idEvent,
            'Year' => $this->year,
            'IsEstimation' => $this->isEstimation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
