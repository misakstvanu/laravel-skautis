<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantEventEducationReminderInput
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
