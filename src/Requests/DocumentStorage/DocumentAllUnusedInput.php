<?php

namespace Misakstvanu\LaravelSkautis\Requests\DocumentStorage;

final class DocumentAllUnusedInput
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
