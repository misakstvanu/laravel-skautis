<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MembershipAllInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $lastName = null,
        public readonly ?string $identificationCode = null,
        public readonly ?bool $onlyDirectMember = null,
        public readonly ?bool $isSts = null,
        public readonly ?bool $showHistory = null,
        public readonly ?bool $isValid = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID_Person' => $this->idPerson,
            'ID_MembershipType' => $this->idMembershipType,
            'ID_MembershipCategory' => $this->idMembershipCategory,
            'LastName' => $this->lastName,
            'IdentificationCode' => $this->identificationCode,
            'OnlyDirectMember' => $this->onlyDirectMember,
            'IsSts' => $this->isSts,
            'ShowHistory' => $this->showHistory,
            'IsValid' => $this->isValid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
