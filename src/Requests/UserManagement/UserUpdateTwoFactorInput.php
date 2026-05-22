<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserUpdateTwoFactorInput
{
    public function __construct(
        public readonly ?string $idTwoFactorType = null,
        public readonly ?int $id = null,
        public readonly ?bool $isEnabledTwoFactor = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_TwoFactorType' => $this->idTwoFactorType,
            'ID' => $this->id,
            'IsEnabledTwoFactor' => $this->isEnabledTwoFactor,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
