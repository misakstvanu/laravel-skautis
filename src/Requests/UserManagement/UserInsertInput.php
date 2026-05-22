<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserInsertInput
{
    public function __construct(
        public readonly ?string $userName = null,
        public readonly ?string $password = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $nickName = null,
        public readonly ?string $email = null,
        public readonly ?string $idSex = null,
        public readonly ?string $birthday = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'UserName' => $this->userName,
            'Password' => $this->password,
            'FirstName' => $this->firstName,
            'LastName' => $this->lastName,
            'NickName' => $this->nickName,
            'Email' => $this->email,
            'ID_Sex' => $this->idSex,
            'Birthday' => $this->birthday,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
