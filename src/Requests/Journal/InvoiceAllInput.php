<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class InvoiceAllInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idInvoiceState = null,
        public readonly ?string $dateGeneratingFrom = null,
        public readonly ?string $dateGeneratingTo = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'DisplayName' => $this->displayName,
            'ID_InvoiceState' => $this->idInvoiceState,
            'DateGeneratingFrom' => $this->dateGeneratingFrom,
            'DateGeneratingTo' => $this->dateGeneratingTo,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
