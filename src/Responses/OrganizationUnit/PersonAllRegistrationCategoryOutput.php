<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonAllRegistrationCategoryOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idMembership = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?string $membershipType = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?bool $canUse = null,
        public readonly ?bool $hasEnroll = null,
        public readonly ?bool $hasCard = null,
        public readonly ?string $idMemberCardType = null,
        public readonly ?string $memberCardType = null,
        public readonly ?bool $studentRequired = null,
        public readonly ?string $memberCardValidTo = null,
        public readonly ?int $idDocumentPersonSchool = null,
        public readonly ?bool $hasValidMemberCard = null,
        public readonly ?int $idPersonPhotoNormal = null,
        public readonly ?int $idPersonPhotoSmall = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idMembership: isset($obj->{'ID_Membership'}) ? (int) $obj->{'ID_Membership'} : null,
            idMembershipType: isset($obj->{'ID_MembershipType'}) ? (string) $obj->{'ID_MembershipType'} : null,
            membershipType: isset($obj->{'MembershipType'}) ? (string) $obj->{'MembershipType'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            canUse: isset($obj->{'CanUse'}) ? (bool) $obj->{'CanUse'} : null,
            hasEnroll: isset($obj->{'HasEnroll'}) ? (bool) $obj->{'HasEnroll'} : null,
            hasCard: isset($obj->{'HasCard'}) ? (bool) $obj->{'HasCard'} : null,
            idMemberCardType: isset($obj->{'ID_MemberCardType'}) ? (string) $obj->{'ID_MemberCardType'} : null,
            memberCardType: isset($obj->{'MemberCardType'}) ? (string) $obj->{'MemberCardType'} : null,
            studentRequired: isset($obj->{'StudentRequired'}) ? (bool) $obj->{'StudentRequired'} : null,
            memberCardValidTo: isset($obj->{'MemberCardValidTo'}) ? (string) $obj->{'MemberCardValidTo'} : null,
            idDocumentPersonSchool: isset($obj->{'ID_DocumentPersonSchool'}) ? (int) $obj->{'ID_DocumentPersonSchool'} : null,
            hasValidMemberCard: isset($obj->{'HasValidMemberCard'}) ? (bool) $obj->{'HasValidMemberCard'} : null,
            idPersonPhotoNormal: isset($obj->{'ID_PersonPhotoNormal'}) ? (int) $obj->{'ID_PersonPhotoNormal'} : null,
            idPersonPhotoSmall: isset($obj->{'ID_PersonPhotoSmall'}) ? (int) $obj->{'ID_PersonPhotoSmall'} : null,
        );
    }
}
