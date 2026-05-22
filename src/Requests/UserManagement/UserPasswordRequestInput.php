<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserPasswordRequestInput
{
    public function __construct(
        public readonly ?string $userName = null,
        public readonly ?string $email = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'UserName' => $this->userName,
            'Email' => $this->email,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
