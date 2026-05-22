<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopyOrderAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idJournal = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Journal' => $this->idJournal,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
