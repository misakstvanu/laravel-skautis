<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonHonourInsertInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $idHonour = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $suggester = null,
        public readonly ?int $idPersonSuggester = null,
        public readonly ?int $idUnitSuggester = null,
        public readonly ?string $letterNumber = null,
        public readonly ?bool $inMemorian = null,
        public readonly ?string $reason = null,
        public readonly ?string $fileName = null,
        public readonly ?string $fileContent = null,
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
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_Honour' => $this->idHonour,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            'Suggester' => $this->suggester,
            'ID_PersonSuggester' => $this->idPersonSuggester,
            'ID_UnitSuggester' => $this->idUnitSuggester,
            'LetterNumber' => $this->letterNumber,
            'InMemorian' => $this->inMemorian,
            'Reason' => $this->reason,
            'FileName' => $this->fileName,
            'FileContent' => $this->fileContent,
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
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
