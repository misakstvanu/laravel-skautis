<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MembershipUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idUser = null,
        public readonly ?string $person = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?bool $isUnique = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $idMembershipReason = null,
        public readonly ?bool $createNew = null,
        public readonly ?bool $onlyValidate = null,
        public readonly ?bool $isFunction = null,
        public readonly ?bool $isUnitFunction = null,
        public readonly ?bool $isSts = null,
        public readonly ?bool $isDelegate = null,
        public readonly ?string $personDateBirth = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'ID_Person' => $this->idPerson,
            'ID_User' => $this->idUser,
            'Person' => $this->person,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            'ID_MembershipType' => $this->idMembershipType,
            'IsUnique' => $this->isUnique,
            'ID_MembershipCategory' => $this->idMembershipCategory,
            'ID_MembershipReason' => $this->idMembershipReason,
            'CreateNew' => $this->createNew,
            'OnlyValidate' => $this->onlyValidate,
            'IsFunction' => $this->isFunction,
            'IsUnitFunction' => $this->isUnitFunction,
            'IsSts' => $this->isSts,
            'IsDelegate' => $this->isDelegate,
            'PersonDateBirth' => $this->personDateBirth,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
