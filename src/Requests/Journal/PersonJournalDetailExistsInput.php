<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class PersonJournalDetailExistsInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $idJournal = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_Journal' => $this->idJournal,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
