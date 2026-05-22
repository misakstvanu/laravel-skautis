<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopySentAllIInvoiceSummaryVatInput
{
    public function __construct(
        public readonly ?int $idInvoice = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Invoice' => $this->idInvoice,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
