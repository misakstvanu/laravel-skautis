<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalCopySentDetailOutput
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
        public readonly ?int $idJournalCopySent = null,
        public readonly ?bool $isFree = null,
        public readonly ?float $price = null,
        public readonly ?string $dateGenerating = null,
        public readonly ?string $dateSent = null,
        public readonly ?int $idInvoice = null,
        public readonly ?string $invoice = null,
        public readonly ?bool $isReturned = null,
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
            idJournalCopySent: isset($obj->{'ID_JournalCopySent'}) ? (int) $obj->{'ID_JournalCopySent'} : null,
            isFree: isset($obj->{'IsFree'}) ? (bool) $obj->{'IsFree'} : null,
            price: isset($obj->{'Price'}) ? (float) $obj->{'Price'} : null,
            dateGenerating: isset($obj->{'DateGenerating'}) ? (string) $obj->{'DateGenerating'} : null,
            dateSent: isset($obj->{'DateSent'}) ? (string) $obj->{'DateSent'} : null,
            idInvoice: isset($obj->{'ID_Invoice'}) ? (int) $obj->{'ID_Invoice'} : null,
            invoice: isset($obj->{'Invoice'}) ? (string) $obj->{'Invoice'} : null,
            isReturned: isset($obj->{'IsReturned'}) ? (bool) $obj->{'IsReturned'} : null,
        );
    }
}
