<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserLoginCodeOtherVerifyInput
{
    public function __construct(
        public readonly ?int $idUser = null,
        public readonly ?string $token = null,
        public readonly ?string $type = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_User' => $this->idUser,
            'Token' => $this->token,
            'Type' => $this->type,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
