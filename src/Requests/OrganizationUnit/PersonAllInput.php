<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idSex = null,
        public readonly ?string $identificationCode = null,
        public readonly ?string $identificationCodeStartsWith = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $securityCode = null,
        public readonly ?int $idUnit = null,
        public readonly ?bool $onlyDirectMember = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $registrationNumber = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_Sex' => $this->idSex,
            'IdentificationCode' => $this->identificationCode,
            'IdentificationCodeStartsWith' => $this->identificationCodeStartsWith,
            'FirstName' => $this->firstName,
            'LastName' => $this->lastName,
            'SecurityCode' => $this->securityCode,
            'ID_Unit' => $this->idUnit,
            'OnlyDirectMember' => $this->onlyDirectMember,
            'ID_FunctionType' => $this->idFunctionType,
            'ID_QualificationType' => $this->idQualificationType,
            'RegistrationNumber' => $this->registrationNumber,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
