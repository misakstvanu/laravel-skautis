<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseAllBorrowableInput
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
