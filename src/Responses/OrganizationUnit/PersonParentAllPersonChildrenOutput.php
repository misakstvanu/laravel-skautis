<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonParentAllPersonChildrenOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $birthday = null,
        public readonly ?string $sex = null,
        public readonly ?string $idSex = null,
        public readonly ?string $phone = null,
        public readonly ?string $email = null,
        public readonly ?bool $canEdit = null,
        public readonly ?bool $showLinkToDetail = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            firstName: isset($obj->{'FirstName'}) ? (string) $obj->{'FirstName'} : null,
            lastName: isset($obj->{'LastName'}) ? (string) $obj->{'LastName'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            sex: isset($obj->{'Sex'}) ? (string) $obj->{'Sex'} : null,
            idSex: isset($obj->{'ID_Sex'}) ? (string) $obj->{'ID_Sex'} : null,
            phone: isset($obj->{'Phone'}) ? (string) $obj->{'Phone'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            canEdit: isset($obj->{'CanEdit'}) ? (bool) $obj->{'CanEdit'} : null,
            showLinkToDetail: isset($obj->{'ShowLinkToDetail'}) ? (bool) $obj->{'ShowLinkToDetail'} : null,
        );
    }
}
