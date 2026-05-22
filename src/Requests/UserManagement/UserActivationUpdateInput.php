<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserActivationUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $code = null,
        public readonly ?string $userName = null,
        public readonly ?string $password = null,
        public readonly ?string $nickName = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $idSex = null,
        public readonly ?string $birthday = null,
        public readonly ?string $email = null,
        public readonly ?string $validTo = null,
        public readonly ?string $activated = null,
        public readonly ?string $iP = null,
        public readonly ?string $idApplication = null,
        public readonly ?string $firstNameParent = null,
        public readonly ?string $lastNameParent = null,
        public readonly ?string $emailParent = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Code' => $this->code,
            'UserName' => $this->userName,
            'Password' => $this->password,
            'NickName' => $this->nickName,
            'FirstName' => $this->firstName,
            'LastName' => $this->lastName,
            'ID_Sex' => $this->idSex,
            'Birthday' => $this->birthday,
            'Email' => $this->email,
            'ValidTo' => $this->validTo,
            'Activated' => $this->activated,
            'IP' => $this->iP,
            'ID_Application' => $this->idApplication,
            'FirstNameParent' => $this->firstNameParent,
            'LastNameParent' => $this->lastNameParent,
            'EmailParent' => $this->emailParent,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
