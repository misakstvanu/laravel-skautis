<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonDetailMemberCardOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $person = null,
        public readonly ?string $birthday = null,
        public readonly ?string $idMemberCardType = null,
        public readonly ?string $memberCardType = null,
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
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            idMemberCardType: isset($obj->{'ID_MemberCardType'}) ? (string) $obj->{'ID_MemberCardType'} : null,
            memberCardType: isset($obj->{'MemberCardType'}) ? (string) $obj->{'MemberCardType'} : null,
            unitStredisko: isset($obj->{'UnitStredisko'}) ? (string) $obj->{'UnitStredisko'} : null,
            leaderContact: isset($obj->{'LeaderContact'}) ? (string) $obj->{'LeaderContact'} : null,
            idDocumentMediumPhoto: isset($obj->{'ID_DocumentMediumPhoto'}) ? (int) $obj->{'ID_DocumentMediumPhoto'} : null,
            storageMediumPhoto: isset($obj->{'StorageMediumPhoto'}) ? (string) $obj->{'StorageMediumPhoto'} : null,
        );
    }
}
