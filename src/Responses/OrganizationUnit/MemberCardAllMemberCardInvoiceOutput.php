<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MemberCardAllMemberCardInvoiceOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idMemberCardState = null,
        public readonly ?string $memberCardState = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idMemberCardType = null,
        public readonly ?string $memberCardType = null,
        public readonly ?int $year = null,
        public readonly ?string $dateCreate = null,
        public readonly ?float $price = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?float $priceWithVat = null,
        public readonly ?float $singlePrice = null,
        public readonly ?float $itemPrice = null,
        public readonly ?float $vatPrice = null,
        public readonly ?string $calls = null,
        public readonly ?string $itemVatRate = null,
        public readonly ?float $itemVatRatePercent = null,
        public readonly ?int $itemCount = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idMemberCardState: isset($obj->{'ID_MemberCardState'}) ? (string) $obj->{'ID_MemberCardState'} : null,
            memberCardState: isset($obj->{'MemberCardState'}) ? (string) $obj->{'MemberCardState'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idMemberCardType: isset($obj->{'ID_MemberCardType'}) ? (string) $obj->{'ID_MemberCardType'} : null,
            memberCardType: isset($obj->{'MemberCardType'}) ? (string) $obj->{'MemberCardType'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            price: isset($obj->{'Price'}) ? (float) $obj->{'Price'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            priceWithVat: isset($obj->{'PriceWithVat'}) ? (float) $obj->{'PriceWithVat'} : null,
            singlePrice: isset($obj->{'SinglePrice'}) ? (float) $obj->{'SinglePrice'} : null,
            itemPrice: isset($obj->{'ItemPrice'}) ? (float) $obj->{'ItemPrice'} : null,
            vatPrice: isset($obj->{'VatPrice'}) ? (float) $obj->{'VatPrice'} : null,
            calls: isset($obj->{'Calls'}) ? (string) $obj->{'Calls'} : null,
            itemVatRate: isset($obj->{'ItemVatRate'}) ? (string) $obj->{'ItemVatRate'} : null,
            itemVatRatePercent: isset($obj->{'ItemVatRatePercent'}) ? (float) $obj->{'ItemVatRatePercent'} : null,
            itemCount: isset($obj->{'ItemCount'}) ? (int) $obj->{'ItemCount'} : null,
        );
    }
}
