<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopyVipAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idJournal = null,
        public readonly ?int $idJournalAttachment = null,
        public readonly ?int $idPersonCreate = null,
        public readonly ?string $person = null,
        public readonly ?string $dateSent = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'ID_Journal' => $this->idJournal,
            'ID_JournalAttachment' => $this->idJournalAttachment,
            'ID_PersonCreate' => $this->idPersonCreate,
            'Person' => $this->person,
            'DateSent' => $this->dateSent,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
