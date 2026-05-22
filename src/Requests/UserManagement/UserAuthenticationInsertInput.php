<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserAuthenticationInsertInput
{
    public function __construct(
        public readonly ?string $number = null,
        public readonly ?string $code = null,
        public readonly ?string $numberDataBox = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idUser = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Number' => $this->number,
            'Code' => $this->code,
            'NumberDataBox' => $this->numberDataBox,
            'ID_Person' => $this->idPerson,
            'ID_User' => $this->idUser,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
