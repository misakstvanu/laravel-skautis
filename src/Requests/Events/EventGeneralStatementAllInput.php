<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventGeneralStatementAllInput
{
    public function __construct(
        public readonly ?int $idEventGeneral = null,
        public readonly ?bool $isEstimate = null,
        public readonly ?bool $isRevenue = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventGeneral' => $this->idEventGeneral,
            'IsEstimate' => $this->isEstimate,
            'IsRevenue' => $this->isRevenue,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
