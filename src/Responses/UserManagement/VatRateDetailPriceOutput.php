<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class VatRateDetailPriceOutput
{
    public function __construct(
        public readonly ?float $priceWithVat = null,
        public readonly ?float $vatRateValue = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            priceWithVat: isset($obj->{'PriceWithVat'}) ? (float) $obj->{'PriceWithVat'} : null,
            vatRateValue: isset($obj->{'VatRateValue'}) ? (float) $obj->{'VatRateValue'} : null,
        );
    }
}
