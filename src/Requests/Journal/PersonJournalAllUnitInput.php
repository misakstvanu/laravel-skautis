<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class PersonJournalAllUnitInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idJournal = null,
        public readonly ?bool $showHistory = null,
        public readonly ?bool $includeChild = null,
        public readonly ?bool $includeAttachmentCount = null,
        public readonly ?bool $isValid = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID_Person' => $this->idPerson,
            'ID_Journal' => $this->idJournal,
            'ShowHistory' => $this->showHistory,
            'IncludeChild' => $this->includeChild,
            'IncludeAttachmentCount' => $this->includeAttachmentCount,
            'IsValid' => $this->isValid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
