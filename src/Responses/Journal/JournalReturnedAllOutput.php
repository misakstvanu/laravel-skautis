<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalReturnedAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $dateCreate = null,
        public readonly ?int $idJournalCopySent = null,
        public readonly ?string $journalCopySent = null,
        public readonly ?string $idJournalReturnedReason = null,
        public readonly ?string $journalReturnedReason = null,
        public readonly ?string $note = null,
        public readonly ?string $dateSent = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?bool $hasPermission = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            idJournalCopySent: isset($obj->{'ID_JournalCopySent'}) ? (int) $obj->{'ID_JournalCopySent'} : null,
            journalCopySent: isset($obj->{'JournalCopySent'}) ? (string) $obj->{'JournalCopySent'} : null,
            idJournalReturnedReason: isset($obj->{'ID_JournalReturnedReason'}) ? (string) $obj->{'ID_JournalReturnedReason'} : null,
            journalReturnedReason: isset($obj->{'JournalReturnedReason'}) ? (string) $obj->{'JournalReturnedReason'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            dateSent: isset($obj->{'DateSent'}) ? (string) $obj->{'DateSent'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            hasPermission: isset($obj->{'HasPermission'}) ? (bool) $obj->{'HasPermission'} : null,
        );
    }
}
