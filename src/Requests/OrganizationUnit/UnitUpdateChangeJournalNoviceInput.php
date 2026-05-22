<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitUpdateChangeJournalNoviceInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idJournalNovice = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_JournalNovice' => $this->idJournalNovice,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
