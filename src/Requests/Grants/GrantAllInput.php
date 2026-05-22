<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $idGrantAdvanceType = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idGrantState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Event' => $this->idEvent,
            'ID_GrantType' => $this->idGrantType,
            'ID_GrantAdvanceType' => $this->idGrantAdvanceType,
            'ID_Unit' => $this->idUnit,
            'ID_GrantState' => $this->idGrantState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
