<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopyDeleteOneInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?int $idJournal = null,
        public readonly ?string $dateSent = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_Journal' => $this->idJournal,
            'DateSent' => $this->dateSent,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
