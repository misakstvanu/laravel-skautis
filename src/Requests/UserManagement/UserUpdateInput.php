<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isEnabled = null,
        public readonly ?string $password = null,
        public readonly ?string $passwordActual = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'IsEnabled' => $this->isEnabled,
            'Password' => $this->password,
            'PasswordActual' => $this->passwordActual,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
