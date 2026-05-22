<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserLoginCodeOtherGenerateEmailCodeInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?string $code = null,
        public readonly ?string $created = null,
        public readonly ?string $used = null,
        public readonly ?bool $isValid = null,
        public readonly ?bool $isActive = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'Code' => $this->code,
            'Created' => $this->created,
            'Used' => $this->used,
            'IsValid' => $this->isValid,
            'IsActive' => $this->isActive,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
