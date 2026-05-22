<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonContactAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $personCivilName = null,
        public readonly ?string $idContactType = null,
        public readonly ?string $contactType = null,
        public readonly ?bool $isMain = null,
        public readonly ?string $value = null,
        public readonly ?string $note = null,
        public readonly ?bool $isGa = null,
        public readonly ?bool $isCatalog = null,
        public readonly ?string $displayValue = null,
        public readonly ?string $displayIcon = null,
        public readonly ?string $icon = null,
        public readonly ?string $help = null,
        public readonly ?int $idPersonContactRequest = null,
        public readonly ?bool $isUsed = null,
        public readonly ?bool $hideable = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            personCivilName: isset($obj->{'PersonCivilName'}) ? (string) $obj->{'PersonCivilName'} : null,
            idContactType: isset($obj->{'ID_ContactType'}) ? (string) $obj->{'ID_ContactType'} : null,
            contactType: isset($obj->{'ContactType'}) ? (string) $obj->{'ContactType'} : null,
            isMain: isset($obj->{'IsMain'}) ? (bool) $obj->{'IsMain'} : null,
            value: isset($obj->{'Value'}) ? (string) $obj->{'Value'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isGa: isset($obj->{'IsGa'}) ? (bool) $obj->{'IsGa'} : null,
            isCatalog: isset($obj->{'IsCatalog'}) ? (bool) $obj->{'IsCatalog'} : null,
            displayValue: isset($obj->{'DisplayValue'}) ? (string) $obj->{'DisplayValue'} : null,
            displayIcon: isset($obj->{'DisplayIcon'}) ? (string) $obj->{'DisplayIcon'} : null,
            icon: isset($obj->{'Icon'}) ? (string) $obj->{'Icon'} : null,
            help: isset($obj->{'Help'}) ? (string) $obj->{'Help'} : null,
            idPersonContactRequest: isset($obj->{'ID_PersonContactRequest'}) ? (int) $obj->{'ID_PersonContactRequest'} : null,
            isUsed: isset($obj->{'IsUsed'}) ? (bool) $obj->{'IsUsed'} : null,
            hideable: isset($obj->{'Hideable'}) ? (bool) $obj->{'Hideable'} : null,
        );
    }
}
