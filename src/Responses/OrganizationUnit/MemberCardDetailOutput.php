<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MemberCardDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $idMemberCardState = null,
        public readonly ?string $memberCardState = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $birthday = null,
        public readonly ?string $idMemberCardType = null,
        public readonly ?string $memberCardType = null,
        public readonly ?int $year = null,
        public readonly ?string $dateCreate = null,
        public readonly ?float $price = null,
        public readonly ?bool $isAuthorized = null,
        public readonly ?bool $isPaid = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?int $idPersonSchool = null,
        public readonly ?string $personSchool = null,
        public readonly ?string $personSchoolCity = null,
        public readonly ?int $idPersonRegistration = null,
        public readonly ?int $idDocumentPersonSchool = null,
        public readonly ?string $unitStredisko = null,
        public readonly ?string $leaderContact = null,
        public readonly ?int $idDocumentMediumPhoto = null,
        public readonly ?string $storageMediumPhoto = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idMemberCardState: isset($obj->{'ID_MemberCardState'}) ? (string) $obj->{'ID_MemberCardState'} : null,
            memberCardState: isset($obj->{'MemberCardState'}) ? (string) $obj->{'MemberCardState'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            idMemberCardType: isset($obj->{'ID_MemberCardType'}) ? (string) $obj->{'ID_MemberCardType'} : null,
            memberCardType: isset($obj->{'MemberCardType'}) ? (string) $obj->{'MemberCardType'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            price: isset($obj->{'Price'}) ? (float) $obj->{'Price'} : null,
            isAuthorized: isset($obj->{'IsAuthorized'}) ? (bool) $obj->{'IsAuthorized'} : null,
            isPaid: isset($obj->{'IsPaid'}) ? (bool) $obj->{'IsPaid'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            idPersonSchool: isset($obj->{'ID_PersonSchool'}) ? (int) $obj->{'ID_PersonSchool'} : null,
            personSchool: isset($obj->{'PersonSchool'}) ? (string) $obj->{'PersonSchool'} : null,
            personSchoolCity: isset($obj->{'PersonSchoolCity'}) ? (string) $obj->{'PersonSchoolCity'} : null,
            idPersonRegistration: isset($obj->{'ID_PersonRegistration'}) ? (int) $obj->{'ID_PersonRegistration'} : null,
            idDocumentPersonSchool: isset($obj->{'ID_DocumentPersonSchool'}) ? (int) $obj->{'ID_DocumentPersonSchool'} : null,
            unitStredisko: isset($obj->{'UnitStredisko'}) ? (string) $obj->{'UnitStredisko'} : null,
            leaderContact: isset($obj->{'LeaderContact'}) ? (string) $obj->{'LeaderContact'} : null,
            idDocumentMediumPhoto: isset($obj->{'ID_DocumentMediumPhoto'}) ? (int) $obj->{'ID_DocumentMediumPhoto'} : null,
            storageMediumPhoto: isset($obj->{'StorageMediumPhoto'}) ? (string) $obj->{'StorageMediumPhoto'} : null,
        );
    }
}
