<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserLoginDeviceUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $token = null,
        public readonly ?string $created = null,
        public readonly ?string $validTo = null,
        public readonly ?int $idUser = null,
        public readonly ?bool $isValid = null,
        public readonly ?string $browser = null,
        public readonly ?string $system = null,
        public readonly ?bool $isMobile = null,
        public readonly ?string $userAgent = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Token' => $this->token,
            'Created' => $this->created,
            'ValidTo' => $this->validTo,
            'ID_User' => $this->idUser,
            'IsValid' => $this->isValid,
            'Browser' => $this->browser,
            'System' => $this->system,
            'IsMobile' => $this->isMobile,
            'UserAgent' => $this->userAgent,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
