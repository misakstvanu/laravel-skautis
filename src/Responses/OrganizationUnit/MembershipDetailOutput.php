<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MembershipDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            idMembershipType: isset($obj->{'ID_MembershipType'}) ? (string) $obj->{'ID_MembershipType'} : null,
            isUnique: isset($obj->{'IsUnique'}) ? (bool) $obj->{'IsUnique'} : null,
            idMembershipCategory: isset($obj->{'ID_MembershipCategory'}) ? (string) $obj->{'ID_MembershipCategory'} : null,
            idMembershipReason: isset($obj->{'ID_MembershipReason'}) ? (string) $obj->{'ID_MembershipReason'} : null,
            createNew: isset($obj->{'CreateNew'}) ? (bool) $obj->{'CreateNew'} : null,
            onlyValidate: isset($obj->{'OnlyValidate'}) ? (bool) $obj->{'OnlyValidate'} : null,
            isFunction: isset($obj->{'IsFunction'}) ? (bool) $obj->{'IsFunction'} : null,
            isUnitFunction: isset($obj->{'IsUnitFunction'}) ? (bool) $obj->{'IsUnitFunction'} : null,
            isSts: isset($obj->{'IsSts'}) ? (bool) $obj->{'IsSts'} : null,
            isDelegate: isset($obj->{'IsDelegate'}) ? (bool) $obj->{'IsDelegate'} : null,
            personDateBirth: isset($obj->{'PersonDateBirth'}) ? (string) $obj->{'PersonDateBirth'} : null,
        );
    }
}
