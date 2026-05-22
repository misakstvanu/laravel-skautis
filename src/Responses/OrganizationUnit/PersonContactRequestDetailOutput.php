<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonContactRequestDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idPersonContact = null,
        public readonly ?string $idContactRequestType = null,
        public readonly ?string $contactRequestType = null,
        public readonly ?string $validTo = null,
        public readonly ?string $created = null,
        public readonly ?int $idUser = null,
        public readonly ?string $completed = null,
        public readonly ?string $code = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idContactType = null,
        public readonly ?string $contactType = null,
        public readonly ?string $value = null,
        public readonly ?bool $isCatalog = null,
        public readonly ?bool $isGa = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPersonContact: isset($obj->{'ID_PersonContact'}) ? (int) $obj->{'ID_PersonContact'} : null,
            idContactRequestType: isset($obj->{'ID_ContactRequestType'}) ? (string) $obj->{'ID_ContactRequestType'} : null,
            contactRequestType: isset($obj->{'ContactRequestType'}) ? (string) $obj->{'ContactRequestType'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            created: isset($obj->{'Created'}) ? (string) $obj->{'Created'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            completed: isset($obj->{'Completed'}) ? (string) $obj->{'Completed'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idContactType: isset($obj->{'ID_ContactType'}) ? (string) $obj->{'ID_ContactType'} : null,
            contactType: isset($obj->{'ContactType'}) ? (string) $obj->{'ContactType'} : null,
            value: isset($obj->{'Value'}) ? (string) $obj->{'Value'} : null,
            isCatalog: isset($obj->{'IsCatalog'}) ? (bool) $obj->{'IsCatalog'} : null,
            isGa: isset($obj->{'IsGa'}) ? (bool) $obj->{'IsGa'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
