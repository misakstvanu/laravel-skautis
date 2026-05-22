<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MembershipAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $identificationCode = null,
        public readonly ?string $birthday = null,
        public readonly ?string $idMembershipReason = null,
        public readonly ?string $membershipReason = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?string $membershipType = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $membershipCategory = null,
        public readonly ?bool $canRenew = null,
        public readonly ?bool $isLegacyMemberRead = null,
        public readonly ?string $dateAccepted = null,
        public readonly ?bool $isAccepted = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            identificationCode: isset($obj->{'IdentificationCode'}) ? (string) $obj->{'IdentificationCode'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            idMembershipReason: isset($obj->{'ID_MembershipReason'}) ? (string) $obj->{'ID_MembershipReason'} : null,
            membershipReason: isset($obj->{'MembershipReason'}) ? (string) $obj->{'MembershipReason'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            idMembershipType: isset($obj->{'ID_MembershipType'}) ? (string) $obj->{'ID_MembershipType'} : null,
            membershipType: isset($obj->{'MembershipType'}) ? (string) $obj->{'MembershipType'} : null,
            idMembershipCategory: isset($obj->{'ID_MembershipCategory'}) ? (string) $obj->{'ID_MembershipCategory'} : null,
            membershipCategory: isset($obj->{'MembershipCategory'}) ? (string) $obj->{'MembershipCategory'} : null,
            canRenew: isset($obj->{'CanRenew'}) ? (bool) $obj->{'CanRenew'} : null,
            isLegacyMemberRead: isset($obj->{'IsLegacyMemberRead'}) ? (bool) $obj->{'IsLegacyMemberRead'} : null,
            dateAccepted: isset($obj->{'DateAccepted'}) ? (string) $obj->{'DateAccepted'} : null,
            isAccepted: isset($obj->{'IsAccepted'}) ? (bool) $obj->{'IsAccepted'} : null,
        );
    }
}
