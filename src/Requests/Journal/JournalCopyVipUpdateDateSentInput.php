<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopyVipUpdateDateSentInput
{
    public function __construct(
        public readonly ?string $dateSentOld = null,
        public readonly ?string $dateSentNew = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DateSentOld' => $this->dateSentOld,
            'DateSentNew' => $this->dateSentNew,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
