<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MemberCardUpdateExpiredInput
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
