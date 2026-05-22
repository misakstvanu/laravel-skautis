<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantProjectAllInput
{
    public function __construct(
        public readonly ?int $idGrant = null,
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idDateType = null,
        public readonly ?bool $isUseShorDescription = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Grant' => $this->idGrant,
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'DisplayName' => $this->displayName,
            'ID_DateType' => $this->idDateType,
            'IsUseShorDescription' => $this->isUseShorDescription,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
