<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MemberCardAllUnitOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idMemberCardState = null,
        public readonly ?string $memberCardState = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idMemberCardType = null,
        public readonly ?string $memberCardType = null,
        public readonly ?int $year = null,
        public readonly ?string $dateCreate = null,
        public readonly ?float $price = null,
        public readonly ?bool $isAuthorized = null,
        public readonly ?bool $isPaid = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?int $idPersonRegistration = null,
        public readonly ?int $idPersonPhotoSmall = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idMemberCardState: isset($obj->{'ID_MemberCardState'}) ? (string) $obj->{'ID_MemberCardState'} : null,
            memberCardState: isset($obj->{'MemberCardState'}) ? (string) $obj->{'MemberCardState'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idMemberCardType: isset($obj->{'ID_MemberCardType'}) ? (string) $obj->{'ID_MemberCardType'} : null,
            memberCardType: isset($obj->{'MemberCardType'}) ? (string) $obj->{'MemberCardType'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            price: isset($obj->{'Price'}) ? (float) $obj->{'Price'} : null,
            isAuthorized: isset($obj->{'IsAuthorized'}) ? (bool) $obj->{'IsAuthorized'} : null,
            isPaid: isset($obj->{'IsPaid'}) ? (bool) $obj->{'IsPaid'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            idPersonRegistration: isset($obj->{'ID_PersonRegistration'}) ? (int) $obj->{'ID_PersonRegistration'} : null,
            idPersonPhotoSmall: isset($obj->{'ID_PersonPhotoSmall'}) ? (int) $obj->{'ID_PersonPhotoSmall'} : null,
        );
    }
}
