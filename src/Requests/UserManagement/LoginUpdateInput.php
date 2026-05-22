<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class LoginUpdateInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?int $idUserRole = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_UserRole' => $this->idUserRole,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
