<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopyVipInsertInput
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_Journal' => $this->idJournal,
            'Journal' => $this->journal,
            'ID_JournalAttachment' => $this->idJournalAttachment,
            'JournalAttachment' => $this->journalAttachment,
            'DateSent' => $this->dateSent,
            'ID_PersonCreate' => $this->idPersonCreate,
            'PersonCreate' => $this->personCreate,
            'FirstLine' => $this->firstLine,
            'Street' => $this->street,
            'City' => $this->city,
            'Postcode' => $this->postcode,
            'ValidTo' => $this->validTo,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
