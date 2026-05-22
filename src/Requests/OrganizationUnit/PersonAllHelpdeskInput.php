<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllHelpdeskInput
{
    public function __construct(
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $nickName = null,
        public readonly ?string $identificationCode = null,
        public readonly ?string $city = null,
        public readonly ?string $userName = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?bool $isValid = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'FirstName' => $this->firstName,
            'LastName' => $this->lastName,
            'NickName' => $this->nickName,
            'IdentificationCode' => $this->identificationCode,
            'City' => $this->city,
            'UserName' => $this->userName,
            'Email' => $this->email,
            'Phone' => $this->phone,
            'IsValid' => $this->isValid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
