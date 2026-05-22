<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalReturnedInsertInput
{
    public function __construct(
        public readonly ?int $idJournalCopySent = null,
        public readonly ?string $journalCopySent = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $idJournalReturnedReason = null,
        public readonly ?string $note = null,
        public readonly ?bool $onlyValidate = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_JournalCopySent' => $this->idJournalCopySent,
            'JournalCopySent' => $this->journalCopySent,
            'DateCreate' => $this->dateCreate,
            'ID_JournalReturnedReason' => $this->idJournalReturnedReason,
            'Note' => $this->note,
            'OnlyValidate' => $this->onlyValidate,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
