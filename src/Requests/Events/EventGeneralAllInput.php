<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventGeneralAllInput
{
    public function __construct(
        public readonly ?bool $isFuture = null,
        public readonly ?bool $isRelation = null,
        public readonly ?bool $isChildDirect = null,
        public readonly ?bool $isChildUnit = null,
        public readonly ?string $idEventGeneralState = null,
        public readonly ?int $idEventGeneralType = null,
        public readonly ?int $idEventGeneralScope = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'IsFuture' => $this->isFuture,
            'IsRelation' => $this->isRelation,
            'IsChildDirect' => $this->isChildDirect,
            'IsChildUnit' => $this->isChildUnit,
            'ID_EventGeneralState' => $this->idEventGeneralState,
            'ID_EventGeneralType' => $this->idEventGeneralType,
            'ID_EventGeneralScope' => $this->idEventGeneralScope,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
