<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RequestInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $identificationCode = null,
        public readonly ?string $person = null,
        public readonly ?string $idSex = null,
        public readonly ?string $sex = null,
        public readonly ?string $birthday = null,
        public readonly ?string $reason = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?string $membershipType = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $membershipCategory = null,
        public readonly ?int $idUserCreate = null,
        public readonly ?int $idPersonCreate = null,
        public readonly ?string $personCreate = null,
        public readonly ?string $dateCreate = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idRequestState = null,
        public readonly ?string $requestState = null,
        public readonly ?int $idUserDecision = null,
        public readonly ?int $idPersonDecision = null,
        public readonly ?string $personDecision = null,
        public readonly ?string $dateDecision = null,
        public readonly ?string $decision = null,
        public readonly ?bool $newMembership = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'IdentificationCode' => $this->identificationCode,
            'Person' => $this->person,
            'ID_Sex' => $this->idSex,
            'Sex' => $this->sex,
            'Birthday' => $this->birthday,
            'Reason' => $this->reason,
            'ValidFrom' => $this->validFrom,
            'ID_MembershipType' => $this->idMembershipType,
            'MembershipType' => $this->membershipType,
            'ID_MembershipCategory' => $this->idMembershipCategory,
            'MembershipCategory' => $this->membershipCategory,
            'ID_UserCreate' => $this->idUserCreate,
            'ID_PersonCreate' => $this->idPersonCreate,
            'PersonCreate' => $this->personCreate,
            'DateCreate' => $this->dateCreate,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'ID_RequestState' => $this->idRequestState,
            'RequestState' => $this->requestState,
            'ID_UserDecision' => $this->idUserDecision,
            'ID_PersonDecision' => $this->idPersonDecision,
            'PersonDecision' => $this->personDecision,
            'DateDecision' => $this->dateDecision,
            'Decision' => $this->decision,
            'NewMembership' => $this->newMembership,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
