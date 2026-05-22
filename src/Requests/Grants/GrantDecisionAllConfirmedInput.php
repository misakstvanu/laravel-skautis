<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantDecisionAllConfirmedInput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $dateFrom = null,
        public readonly ?string $dateTo = null,
        public readonly ?float $amountMin = null,
        public readonly ?float $amountMax = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitRegistrationNumber = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Year' => $this->year,
            'ID_GrantType' => $this->idGrantType,
            'DateFrom' => $this->dateFrom,
            'DateTo' => $this->dateTo,
            'AmountMin' => $this->amountMin,
            'AmountMax' => $this->amountMax,
            'Unit' => $this->unit,
            'UnitRegistrationNumber' => $this->unitRegistrationNumber,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
