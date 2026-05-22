<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class GroupMemberApplicationInput
{
    public function __construct(
        public readonly ?bool $grant = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Grant' => $this->grant,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
