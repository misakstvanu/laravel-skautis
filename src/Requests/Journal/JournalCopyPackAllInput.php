<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopyPackAllInput
{
    public function __construct(
        public readonly ?string $journalCopyRoot = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'JournalCopyRoot' => $this->journalCopyRoot,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
