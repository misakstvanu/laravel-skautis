<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MemberCardInvoiceAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $displayName = null,
        public readonly ?int $sequence = null,
        public readonly ?string $maturity = null,
        public readonly ?float $price = null,
        public readonly ?int $idMemberCardInvoiceGenerate = null,
        public readonly ?string $dateGenerating = null,
        public readonly ?string $idMemberCardInvoiceState = null,
        public readonly ?string $memberCardInvoiceState = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            sequence: isset($obj->{'Sequence'}) ? (int) $obj->{'Sequence'} : null,
            maturity: isset($obj->{'Maturity'}) ? (string) $obj->{'Maturity'} : null,
            price: isset($obj->{'Price'}) ? (float) $obj->{'Price'} : null,
            idMemberCardInvoiceGenerate: isset($obj->{'ID_MemberCardInvoiceGenerate'}) ? (int) $obj->{'ID_MemberCardInvoiceGenerate'} : null,
            dateGenerating: isset($obj->{'DateGenerating'}) ? (string) $obj->{'DateGenerating'} : null,
            idMemberCardInvoiceState: isset($obj->{'ID_MemberCardInvoiceState'}) ? (string) $obj->{'ID_MemberCardInvoiceState'} : null,
            memberCardInvoiceState: isset($obj->{'MemberCardInvoiceState'}) ? (string) $obj->{'MemberCardInvoiceState'} : null,
        );
    }
}
