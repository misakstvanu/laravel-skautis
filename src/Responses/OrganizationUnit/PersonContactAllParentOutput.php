<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonContactAllParentOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $personCivilName = null,
        public readonly ?int $idPersonParent = null,
        public readonly ?int $idPersonPersonParent = null,
        public readonly ?string $personPersonParent = null,
        public readonly ?string $idContactType = null,
        public readonly ?string $contactType = null,
        public readonly ?string $value = null,
        public readonly ?string $displayValue = null,
        public readonly ?string $displayIcon = null,
        public readonly ?string $icon = null,
        public readonly ?string $idParentType = null,
        public readonly ?string $parentType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            personCivilName: isset($obj->{'PersonCivilName'}) ? (string) $obj->{'PersonCivilName'} : null,
            idPersonParent: isset($obj->{'ID_PersonParent'}) ? (int) $obj->{'ID_PersonParent'} : null,
            idPersonPersonParent: isset($obj->{'ID_PersonPersonParent'}) ? (int) $obj->{'ID_PersonPersonParent'} : null,
            personPersonParent: isset($obj->{'PersonPersonParent'}) ? (string) $obj->{'PersonPersonParent'} : null,
            idContactType: isset($obj->{'ID_ContactType'}) ? (string) $obj->{'ID_ContactType'} : null,
            contactType: isset($obj->{'ContactType'}) ? (string) $obj->{'ContactType'} : null,
            value: isset($obj->{'Value'}) ? (string) $obj->{'Value'} : null,
            displayValue: isset($obj->{'DisplayValue'}) ? (string) $obj->{'DisplayValue'} : null,
            displayIcon: isset($obj->{'DisplayIcon'}) ? (string) $obj->{'DisplayIcon'} : null,
            icon: isset($obj->{'Icon'}) ? (string) $obj->{'Icon'} : null,
            idParentType: isset($obj->{'ID_ParentType'}) ? (string) $obj->{'ID_ParentType'} : null,
            parentType: isset($obj->{'ParentType'}) ? (string) $obj->{'ParentType'} : null,
        );
    }
}
