<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $idEventCongressType = null,
        public readonly ?int $idUnit = null,
        public readonly ?bool $isFuture = null,
        public readonly ?bool $isParticipant = null,
        public readonly ?bool $isUnit = null,
        public readonly ?bool $isChildDirect = null,
        public readonly ?bool $isChildUnit = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $idEventCongressState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_EventCongressType' => $this->idEventCongressType,
            'ID_Unit' => $this->idUnit,
            'IsFuture' => $this->isFuture,
            'IsParticipant' => $this->isParticipant,
            'IsUnit' => $this->isUnit,
            'IsChildDirect' => $this->isChildDirect,
            'IsChildUnit' => $this->isChildUnit,
            'ID_UnitType' => $this->idUnitType,
            'ID_EventCongressState' => $this->idEventCongressState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
