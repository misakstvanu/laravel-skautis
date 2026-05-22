<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class PersonJournalUpdateInput
{
    public function __construct(
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'ID_Journal' => $this->idJournal,
            'Journal' => $this->journal,
            'ID_JournalType' => $this->idJournalType,
            'JournalType' => $this->journalType,
            'IsFree' => $this->isFree,
            'IsAuthorized' => $this->isAuthorized,
            'IsPaid' => $this->isPaid,
            'IsNovice' => $this->isNovice,
            'ID_JournalDeliveryType' => $this->idJournalDeliveryType,
            'JournalDeliveryType' => $this->journalDeliveryType,
            'Key' => $this->key,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
