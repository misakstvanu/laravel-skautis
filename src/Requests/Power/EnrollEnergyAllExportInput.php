<?php

namespace Misakstvanu\LaravelSkautis\Requests\Power;

final class EnrollEnergyAllExportInput
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
