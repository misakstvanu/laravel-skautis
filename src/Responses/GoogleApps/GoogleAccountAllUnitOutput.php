<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class GoogleAccountAllUnitOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $idContactType = null,
        public readonly ?string $contactType = null,
        public readonly ?string $value = null,
        public readonly ?string $dateCreated = null,
        public readonly ?int $aliasCount = null,
        public readonly ?string $displayNameFirst = null,
        public readonly ?string $displayNameLast = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idContactType: isset($obj->{'ID_ContactType'}) ? (string) $obj->{'ID_ContactType'} : null,
            contactType: isset($obj->{'ContactType'}) ? (string) $obj->{'ContactType'} : null,
            value: isset($obj->{'Value'}) ? (string) $obj->{'Value'} : null,
            dateCreated: isset($obj->{'DateCreated'}) ? (string) $obj->{'DateCreated'} : null,
            aliasCount: isset($obj->{'AliasCount'}) ? (int) $obj->{'AliasCount'} : null,
            displayNameFirst: isset($obj->{'DisplayNameFirst'}) ? (string) $obj->{'DisplayNameFirst'} : null,
            displayNameLast: isset($obj->{'DisplayNameLast'}) ? (string) $obj->{'DisplayNameLast'} : null,
        );
    }
}
