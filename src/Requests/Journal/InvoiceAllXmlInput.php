<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class InvoiceAllXmlInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idInvoiceState = null,
        public readonly ?string $dateGeneratingFrom = null,
        public readonly ?string $dateGeneratingTo = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_InvoiceState' => $this->idInvoiceState,
            'DateGeneratingFrom' => $this->dateGeneratingFrom,
            'DateGeneratingTo' => $this->dateGeneratingTo,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
