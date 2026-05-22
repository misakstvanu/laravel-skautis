<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventGeneralStatementDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventGeneral = null,
        public readonly ?bool $isRevenue = null,
        public readonly ?int $idEventGeneralStatementType = null,
        public readonly ?string $eventGeneralStatementType = null,
        public readonly ?float $ammount = null,
        public readonly ?bool $isEstimate = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventGeneral' => $this->idEventGeneral,
            'IsRevenue' => $this->isRevenue,
            'ID_EventGeneralStatementType' => $this->idEventGeneralStatementType,
            'EventGeneralStatementType' => $this->eventGeneralStatementType,
            'Ammount' => $this->ammount,
            'IsEstimate' => $this->isEstimate,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
