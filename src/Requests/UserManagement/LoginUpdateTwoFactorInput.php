<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class LoginUpdateTwoFactorInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $idApplication = null,
        public readonly ?string $code = null,
        public readonly ?string $idTwoFactorType = null,
        public readonly ?bool $saveDevice = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Application' => $this->idApplication,
            'Code' => $this->code,
            'ID_TwoFactorType' => $this->idTwoFactorType,
            'SaveDevice' => $this->saveDevice,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
