<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class StockTakingInsertInput
{
    public function __construct(
        public readonly ?int $int = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'int' => $this->int,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
