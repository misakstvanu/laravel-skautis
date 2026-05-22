<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopyUpdateCloseYearInput
{
    public function __construct() {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
