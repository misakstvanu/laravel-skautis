<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class GoogleAccountAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idContactType = null,
        public readonly ?string $contactType = null,
        public readonly ?string $value = null,
        public readonly ?string $dateCreated = null,
        public readonly ?string $loginUrl = null,
        public readonly ?bool $isGroupAdult = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idContactType: isset($obj->{'ID_ContactType'}) ? (string) $obj->{'ID_ContactType'} : null,
            contactType: isset($obj->{'ContactType'}) ? (string) $obj->{'ContactType'} : null,
            value: isset($obj->{'Value'}) ? (string) $obj->{'Value'} : null,
            dateCreated: isset($obj->{'DateCreated'}) ? (string) $obj->{'DateCreated'} : null,
            loginUrl: isset($obj->{'LoginUrl'}) ? (string) $obj->{'LoginUrl'} : null,
            isGroupAdult: isset($obj->{'IsGroupAdult'}) ? (bool) $obj->{'IsGroupAdult'} : null,
        );
    }
}
