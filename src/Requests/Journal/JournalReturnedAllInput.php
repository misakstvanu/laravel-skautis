<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalReturnedAllInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $idJournalCopySent = null,
        public readonly ?string $idJournalReturnedReason = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID_JournalCopySent' => $this->idJournalCopySent,
            'ID_JournalReturnedReason' => $this->idJournalReturnedReason,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
