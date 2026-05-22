<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAdvanceAllPaymentsInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idEvent = null,
        public readonly ?int $idEventEducationTerm = null,
        public readonly ?string $idGrantAdvanceType = null,
        public readonly ?string $idGrantState = null,
        public readonly ?int $year = null,
        public readonly ?string $string = null,
        public readonly ?int $daysAhead = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Grant' => $this->idGrant,
            'ID_Unit' => $this->idUnit,
            'ID_Event' => $this->idEvent,
            'ID_EventEducationTerm' => $this->idEventEducationTerm,
            'ID_GrantAdvanceType' => $this->idGrantAdvanceType,
            'ID_GrantState' => $this->idGrantState,
            'Year' => $this->year,
            'string' => $this->string,
            'DaysAhead' => $this->daysAhead,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
