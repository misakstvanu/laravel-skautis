<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllLoginInput
{
    public function __construct(
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $nickName = null,
        public readonly ?string $identificationCode = null,
        public readonly ?string $identificationCodeStartsWith = null,
        public readonly ?string $birthday = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $phone = null,
        public readonly ?string $email = null,
        public readonly ?string $city = null,
        public readonly ?string $registrationNumber = null,
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
            'IdentificationCodeStartsWith' => $this->identificationCodeStartsWith,
            'Birthday' => $this->birthday,
            'ID_MembershipType' => $this->idMembershipType,
            'ID_MembershipCategory' => $this->idMembershipCategory,
            'Phone' => $this->phone,
            'Email' => $this->email,
            'City' => $this->city,
            'RegistrationNumber' => $this->registrationNumber,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
