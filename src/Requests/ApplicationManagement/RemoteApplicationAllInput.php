<?php

namespace Misakstvanu\LaravelSkautis\Requests\ApplicationManagement;

final class RemoteApplicationAllInput
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
