<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class InvoiceAllInvoiceStateInput
{
    public function __construct(
        public readonly ?string $idInvoiceState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_InvoiceState' => $this->idInvoiceState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
