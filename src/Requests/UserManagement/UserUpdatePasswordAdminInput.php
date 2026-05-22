<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserUpdatePasswordAdminInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $password = null,
        public readonly ?string $password2 = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Password' => $this->password,
            'Password2' => $this->password2,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
