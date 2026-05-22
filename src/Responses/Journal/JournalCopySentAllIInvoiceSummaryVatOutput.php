<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalCopySentAllIInvoiceSummaryVatOutput
{
    public function __construct(
        public readonly ?string $rate = null,
        public readonly ?float $foundation = null,
        public readonly ?float $vAT = null,
        public readonly ?float $total = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            rate: isset($obj->{'Rate'}) ? (string) $obj->{'Rate'} : null,
            foundation: isset($obj->{'Foundation'}) ? (float) $obj->{'Foundation'} : null,
            vAT: isset($obj->{'VAT'}) ? (float) $obj->{'VAT'} : null,
            total: isset($obj->{'Total'}) ? (float) $obj->{'Total'} : null,
        );
    }
}
