<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class PersonJournalDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $idJournal = null,
        public readonly ?string $journal = null,
        public readonly ?string $idJournalType = null,
        public readonly ?string $journalType = null,
        public readonly ?bool $isFree = null,
        public readonly ?bool $isAuthorized = null,
        public readonly ?bool $isPaid = null,
        public readonly ?bool $isNovice = null,
        public readonly ?string $idJournalDeliveryType = null,
        public readonly ?string $journalDeliveryType = null,
        public readonly ?string $key = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idJournal: isset($obj->{'ID_Journal'}) ? (int) $obj->{'ID_Journal'} : null,
            journal: isset($obj->{'Journal'}) ? (string) $obj->{'Journal'} : null,
            idJournalType: isset($obj->{'ID_JournalType'}) ? (string) $obj->{'ID_JournalType'} : null,
            journalType: isset($obj->{'JournalType'}) ? (string) $obj->{'JournalType'} : null,
            isFree: isset($obj->{'IsFree'}) ? (bool) $obj->{'IsFree'} : null,
            isAuthorized: isset($obj->{'IsAuthorized'}) ? (bool) $obj->{'IsAuthorized'} : null,
            isPaid: isset($obj->{'IsPaid'}) ? (bool) $obj->{'IsPaid'} : null,
            isNovice: isset($obj->{'IsNovice'}) ? (bool) $obj->{'IsNovice'} : null,
            idJournalDeliveryType: isset($obj->{'ID_JournalDeliveryType'}) ? (string) $obj->{'ID_JournalDeliveryType'} : null,
            journalDeliveryType: isset($obj->{'JournalDeliveryType'}) ? (string) $obj->{'JournalDeliveryType'} : null,
            key: isset($obj->{'Key'}) ? (string) $obj->{'Key'} : null,
        );
    }
}
