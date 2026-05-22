<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopyOrderItemAllInput
{
    public function __construct(
        public readonly ?int $idJournalCopyOrder = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_JournalCopyOrder' => $this->idJournalCopyOrder,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
