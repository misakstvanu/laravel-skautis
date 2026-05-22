<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalCopyVipAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idJournal = null,
        public readonly ?string $journal = null,
        public readonly ?int $idJournalAttachment = null,
        public readonly ?string $journalAttachment = null,
        public readonly ?string $dateSent = null,
        public readonly ?int $idPersonCreate = null,
        public readonly ?string $personCreate = null,
        public readonly ?string $firstLine = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $validTo = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idJournal: isset($obj->{'ID_Journal'}) ? (int) $obj->{'ID_Journal'} : null,
            journal: isset($obj->{'Journal'}) ? (string) $obj->{'Journal'} : null,
            idJournalAttachment: isset($obj->{'ID_JournalAttachment'}) ? (int) $obj->{'ID_JournalAttachment'} : null,
            journalAttachment: isset($obj->{'JournalAttachment'}) ? (string) $obj->{'JournalAttachment'} : null,
            dateSent: isset($obj->{'DateSent'}) ? (string) $obj->{'DateSent'} : null,
            idPersonCreate: isset($obj->{'ID_PersonCreate'}) ? (int) $obj->{'ID_PersonCreate'} : null,
            personCreate: isset($obj->{'PersonCreate'}) ? (string) $obj->{'PersonCreate'} : null,
            firstLine: isset($obj->{'FirstLine'}) ? (string) $obj->{'FirstLine'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
        );
    }
}
