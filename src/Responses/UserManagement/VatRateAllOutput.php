<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class VatRateAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?float $value = null,
        public readonly ?string $note = null,
        public readonly ?string $idVatRateType = null,
        public readonly ?string $vatRateType = null,
        public readonly ?float $valuePercent = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            value: isset($obj->{'Value'}) ? (float) $obj->{'Value'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idVatRateType: isset($obj->{'ID_VatRateType'}) ? (string) $obj->{'ID_VatRateType'} : null,
            vatRateType: isset($obj->{'VatRateType'}) ? (string) $obj->{'VatRateType'} : null,
            valuePercent: isset($obj->{'ValuePercent'}) ? (float) $obj->{'ValuePercent'} : null,
        );
    }
}
