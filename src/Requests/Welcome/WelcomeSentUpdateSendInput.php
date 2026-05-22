<?php

namespace Misakstvanu\LaravelSkautis\Requests\Welcome;

final class WelcomeSentUpdateSendInput
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
