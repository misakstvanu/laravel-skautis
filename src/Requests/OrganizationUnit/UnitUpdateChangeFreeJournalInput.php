<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitUpdateChangeFreeJournalInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $changeFreeJournal = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ChangeFreeJournal' => $this->changeFreeJournal,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
