<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class LoginInsertInput
{
    public function __construct(
        public readonly ?string $userName = null,
        public readonly ?string $password = null,
        public readonly ?int $idUserRole = null,
        public readonly ?string $idApplication = null,
        public readonly ?string $iP = null,
        public readonly ?bool $isPersistent = null,
        public readonly ?string $idPersistentLogin = null,
        public readonly ?string $token = null,
        public readonly ?string $userAgent = null,
        public readonly ?string $place = null,
        public readonly ?bool $isMobile = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'UserName' => $this->userName,
            'Password' => $this->password,
            'ID_UserRole' => $this->idUserRole,
            'ID_Application' => $this->idApplication,
            'IP' => $this->iP,
            'IsPersistent' => $this->isPersistent,
            'ID_PersistentLogin' => $this->idPersistentLogin,
            'Token' => $this->token,
            'UserAgent' => $this->userAgent,
            'Place' => $this->place,
            'IsMobile' => $this->isMobile,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
