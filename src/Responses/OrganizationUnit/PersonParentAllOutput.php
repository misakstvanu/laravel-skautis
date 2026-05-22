<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonParentAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idPersonParent = null,
        public readonly ?string $parent = null,
        public readonly ?string $idParentType = null,
        public readonly ?string $parentType = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $phone = null,
        public readonly ?string $email = null,
        public readonly ?string $note = null,
        public readonly ?bool $showLinkToDetail = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idPersonParent: isset($obj->{'ID_PersonParent'}) ? (int) $obj->{'ID_PersonParent'} : null,
            parent: isset($obj->{'Parent'}) ? (string) $obj->{'Parent'} : null,
            idParentType: isset($obj->{'ID_ParentType'}) ? (string) $obj->{'ID_ParentType'} : null,
            parentType: isset($obj->{'ParentType'}) ? (string) $obj->{'ParentType'} : null,
            firstName: isset($obj->{'FirstName'}) ? (string) $obj->{'FirstName'} : null,
            lastName: isset($obj->{'LastName'}) ? (string) $obj->{'LastName'} : null,
            phone: isset($obj->{'Phone'}) ? (string) $obj->{'Phone'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            showLinkToDetail: isset($obj->{'ShowLinkToDetail'}) ? (bool) $obj->{'ShowLinkToDetail'} : null,
        );
    }
}
