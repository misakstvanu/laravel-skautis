<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopyOrderUpdateSendMessageInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $dateSent = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idJournal = null,
        public readonly ?string $journal = null,
        public readonly ?string $message = null,
        public readonly ?int $idDocument = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DateSent' => $this->dateSent,
            'DisplayName' => $this->displayName,
            'ID_Journal' => $this->idJournal,
            'Journal' => $this->journal,
            'Message' => $this->message,
            'ID_Document' => $this->idDocument,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
