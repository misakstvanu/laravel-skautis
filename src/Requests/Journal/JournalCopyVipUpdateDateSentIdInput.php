<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopyVipUpdateDateSentIdInput
{
    public function __construct(
        public readonly ?int $int = null,
        public readonly ?string $dateSent = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'int' => $this->int,
            'DateSent' => $this->dateSent,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
