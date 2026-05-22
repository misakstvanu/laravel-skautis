<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $username = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Username' => $this->username,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
