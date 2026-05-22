<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationMembersOutput
{
    public function __construct(
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
        public readonly ?int $count = null,
        public readonly ?string $row = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?bool $isThisUnit = null,
        public readonly ?string $idAgeCategory = null,
        public readonly ?string $ageCategory = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $membershipCategory = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
            count: isset($obj->{'Count'}) ? (int) $obj->{'Count'} : null,
            row: isset($obj->{'Row'}) ? (string) $obj->{'Row'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idMembershipType: isset($obj->{'ID_MembershipType'}) ? (string) $obj->{'ID_MembershipType'} : null,
            isThisUnit: isset($obj->{'IsThisUnit'}) ? (bool) $obj->{'IsThisUnit'} : null,
            idAgeCategory: isset($obj->{'ID_AgeCategory'}) ? (string) $obj->{'ID_AgeCategory'} : null,
            ageCategory: isset($obj->{'AgeCategory'}) ? (string) $obj->{'AgeCategory'} : null,
            idMembershipCategory: isset($obj->{'ID_MembershipCategory'}) ? (string) $obj->{'ID_MembershipCategory'} : null,
            membershipCategory: isset($obj->{'MembershipCategory'}) ? (string) $obj->{'MembershipCategory'} : null,
        );
    }
}
