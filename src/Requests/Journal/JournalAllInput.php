<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $idJournalType = null,
        public readonly ?bool $hideAttachment = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_JournalType' => $this->idJournalType,
            'HideAttachment' => $this->hideAttachment,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
