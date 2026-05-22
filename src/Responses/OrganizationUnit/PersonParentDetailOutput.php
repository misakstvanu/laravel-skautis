<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonParentDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
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
        public readonly ?string $parentNote = null,
        public readonly ?bool $parentHasAccount = null,
        public readonly ?string $parentCode = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
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
            parentNote: isset($obj->{'ParentNote'}) ? (string) $obj->{'ParentNote'} : null,
            parentHasAccount: isset($obj->{'ParentHasAccount'}) ? (bool) $obj->{'ParentHasAccount'} : null,
            parentCode: isset($obj->{'ParentCode'}) ? (string) $obj->{'ParentCode'} : null,
        );
    }
}
