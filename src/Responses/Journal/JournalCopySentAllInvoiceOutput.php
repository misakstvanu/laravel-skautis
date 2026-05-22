<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalCopySentAllInvoiceOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $idJournal = null,
        public readonly ?string $journal = null,
        public readonly ?string $moneyOrder = null,
        public readonly ?int $idJournalCopySent = null,
        public readonly ?bool $isFree = null,
        public readonly ?float $price = null,
        public readonly ?string $dateGenerating = null,
        public readonly ?string $dateSent = null,
        public readonly ?float $priceWithVat = null,
        public readonly ?float $singlePrice = null,
        public readonly ?float $itemPrice = null,
        public readonly ?float $vatPrice = null,
        public readonly ?string $calls = null,
        public readonly ?string $itemVatRate = null,
        public readonly ?float $itemVatRatePercent = null,
        public readonly ?int $itemCount = null,
        public readonly ?string $invoiceVatCode = null,
        public readonly ?string $activityCode = null,
        public readonly ?string $accountCoding = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idJournal: isset($obj->{'ID_Journal'}) ? (int) $obj->{'ID_Journal'} : null,
            journal: isset($obj->{'Journal'}) ? (string) $obj->{'Journal'} : null,
            moneyOrder: isset($obj->{'MoneyOrder'}) ? (string) $obj->{'MoneyOrder'} : null,
            idJournalCopySent: isset($obj->{'ID_JournalCopySent'}) ? (int) $obj->{'ID_JournalCopySent'} : null,
            isFree: isset($obj->{'IsFree'}) ? (bool) $obj->{'IsFree'} : null,
            price: isset($obj->{'Price'}) ? (float) $obj->{'Price'} : null,
            dateGenerating: isset($obj->{'DateGenerating'}) ? (string) $obj->{'DateGenerating'} : null,
            dateSent: isset($obj->{'DateSent'}) ? (string) $obj->{'DateSent'} : null,
            priceWithVat: isset($obj->{'PriceWithVat'}) ? (float) $obj->{'PriceWithVat'} : null,
            singlePrice: isset($obj->{'SinglePrice'}) ? (float) $obj->{'SinglePrice'} : null,
            itemPrice: isset($obj->{'ItemPrice'}) ? (float) $obj->{'ItemPrice'} : null,
            vatPrice: isset($obj->{'VatPrice'}) ? (float) $obj->{'VatPrice'} : null,
            calls: isset($obj->{'Calls'}) ? (string) $obj->{'Calls'} : null,
            itemVatRate: isset($obj->{'ItemVatRate'}) ? (string) $obj->{'ItemVatRate'} : null,
            itemVatRatePercent: isset($obj->{'ItemVatRatePercent'}) ? (float) $obj->{'ItemVatRatePercent'} : null,
            itemCount: isset($obj->{'ItemCount'}) ? (int) $obj->{'ItemCount'} : null,
            invoiceVatCode: isset($obj->{'InvoiceVatCode'}) ? (string) $obj->{'InvoiceVatCode'} : null,
            activityCode: isset($obj->{'ActivityCode'}) ? (string) $obj->{'ActivityCode'} : null,
            accountCoding: isset($obj->{'AccountCoding'}) ? (string) $obj->{'AccountCoding'} : null,
        );
    }
}
