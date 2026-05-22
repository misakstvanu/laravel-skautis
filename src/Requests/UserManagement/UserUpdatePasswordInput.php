<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserUpdatePasswordInput
{
    public function __construct(
        public readonly ?string $passwordRequest = null,
        public readonly ?string $password = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'PasswordRequest' => $this->passwordRequest,
            'Password' => $this->password,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
