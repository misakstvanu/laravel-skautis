<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopySentAllInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idJournal = null,
        public readonly ?int $idJournalCopySent = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_Unit' => $this->idUnit,
            'ID_Journal' => $this->idJournal,
            'ID_JournalCopySent' => $this->idJournalCopySent,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
