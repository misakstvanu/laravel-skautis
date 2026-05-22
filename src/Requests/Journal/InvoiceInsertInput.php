<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class InvoiceInsertInput
{
    public function __construct(
        public readonly ?bool $allUnits = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $dateGenerating = null,
        public readonly ?string $maturity = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'AllUnits' => $this->allUnits,
            'ID_Unit' => $this->idUnit,
            'DateGenerating' => $this->dateGenerating,
            'Maturity' => $this->maturity,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
