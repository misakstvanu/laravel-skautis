<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressUpdateUnitAuditActivityTypeInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idUnitAuditActivityType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_UnitAuditActivityType' => $this->idUnitAuditActivityType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
