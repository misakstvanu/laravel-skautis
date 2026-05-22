<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class InvoiceAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $dateGenerating = null,
        public readonly ?string $idInvoiceState = null,
        public readonly ?string $invoiceState = null,
        public readonly ?string $maturity = null,
        public readonly ?int $sequence = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?float $price = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            dateGenerating: isset($obj->{'DateGenerating'}) ? (string) $obj->{'DateGenerating'} : null,
            idInvoiceState: isset($obj->{'ID_InvoiceState'}) ? (string) $obj->{'ID_InvoiceState'} : null,
            invoiceState: isset($obj->{'InvoiceState'}) ? (string) $obj->{'InvoiceState'} : null,
            maturity: isset($obj->{'Maturity'}) ? (string) $obj->{'Maturity'} : null,
            sequence: isset($obj->{'Sequence'}) ? (int) $obj->{'Sequence'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            price: isset($obj->{'Price'}) ? (float) $obj->{'Price'} : null,
        );
    }
}
