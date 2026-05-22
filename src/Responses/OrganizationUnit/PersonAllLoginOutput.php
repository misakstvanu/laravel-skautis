<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonAllLoginOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGroup = null,
        public readonly ?string $displayName = null,
        public readonly ?string $birthday = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $nickName = null,
        public readonly ?string $note = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
        public readonly ?string $postalFirstLine = null,
        public readonly ?string $postalStreet = null,
        public readonly ?string $postalCity = null,
        public readonly ?string $postalPostcode = null,
        public readonly ?string $postalState = null,
        public readonly ?string $idSex = null,
        public readonly ?string $sex = null,
        public readonly ?string $maidenName = null,
        public readonly ?string $idMembershipType = null,
        public readonly ?string $membershipType = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $membershipCategory = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?bool $isParent = null,
        public readonly ?bool $isChildren = null,
        public readonly ?string $photoExtension = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGroup: isset($obj->{'ID_Group'}) ? (int) $obj->{'ID_Group'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            firstName: isset($obj->{'FirstName'}) ? (string) $obj->{'FirstName'} : null,
            lastName: isset($obj->{'LastName'}) ? (string) $obj->{'LastName'} : null,
            nickName: isset($obj->{'NickName'}) ? (string) $obj->{'NickName'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            state: isset($obj->{'State'}) ? (string) $obj->{'State'} : null,
            postalFirstLine: isset($obj->{'PostalFirstLine'}) ? (string) $obj->{'PostalFirstLine'} : null,
            postalStreet: isset($obj->{'PostalStreet'}) ? (string) $obj->{'PostalStreet'} : null,
            postalCity: isset($obj->{'PostalCity'}) ? (string) $obj->{'PostalCity'} : null,
            postalPostcode: isset($obj->{'PostalPostcode'}) ? (string) $obj->{'PostalPostcode'} : null,
            postalState: isset($obj->{'PostalState'}) ? (string) $obj->{'PostalState'} : null,
            idSex: isset($obj->{'ID_Sex'}) ? (string) $obj->{'ID_Sex'} : null,
            sex: isset($obj->{'Sex'}) ? (string) $obj->{'Sex'} : null,
            maidenName: isset($obj->{'MaidenName'}) ? (string) $obj->{'MaidenName'} : null,
            idMembershipType: isset($obj->{'ID_MembershipType'}) ? (string) $obj->{'ID_MembershipType'} : null,
            membershipType: isset($obj->{'MembershipType'}) ? (string) $obj->{'MembershipType'} : null,
            idMembershipCategory: isset($obj->{'ID_MembershipCategory'}) ? (string) $obj->{'ID_MembershipCategory'} : null,
            membershipCategory: isset($obj->{'MembershipCategory'}) ? (string) $obj->{'MembershipCategory'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            phone: isset($obj->{'Phone'}) ? (string) $obj->{'Phone'} : null,
            isParent: isset($obj->{'IsParent'}) ? (bool) $obj->{'IsParent'} : null,
            isChildren: isset($obj->{'IsChildren'}) ? (bool) $obj->{'IsChildren'} : null,
            photoExtension: isset($obj->{'PhotoExtension'}) ? (string) $obj->{'PhotoExtension'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
        );
    }
}
