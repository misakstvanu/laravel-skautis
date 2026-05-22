<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantEducationInsertInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $nickName = null,
        public readonly ?string $identificationCode = null,
        public readonly ?bool $isForeign = null,
        public readonly ?string $idSex = null,
        public readonly ?string $birthday = null,
        public readonly ?bool $identificationCodeForce = null,
        public readonly ?string $note = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
        public readonly ?bool $isAddressAuthenticated = null,
        public readonly ?string $addressDistrict = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventEducationCourse = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'FirstName' => $this->firstName,
            'LastName' => $this->lastName,
            'NickName' => $this->nickName,
            'IdentificationCode' => $this->identificationCode,
            'IsForeign' => $this->isForeign,
            'ID_Sex' => $this->idSex,
            'Birthday' => $this->birthday,
            'IdentificationCodeForce' => $this->identificationCodeForce,
            'Note' => $this->note,
            'Street' => $this->street,
            'City' => $this->city,
            'Postcode' => $this->postcode,
            'State' => $this->state,
            'IsAddressAuthenticated' => $this->isAddressAuthenticated,
            'AddressDistrict' => $this->addressDistrict,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
