<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitContactAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $idContactType = null,
        public readonly ?string $contactType = null,
        public readonly ?bool $publish = null,
        public readonly ?string $value = null,
        public readonly ?string $note = null,
        public readonly ?string $displayValue = null,
        public readonly ?string $displayIcon = null,
        public readonly ?string $help = null,
        public readonly ?string $icon = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idContactType: isset($obj->{'ID_ContactType'}) ? (string) $obj->{'ID_ContactType'} : null,
            contactType: isset($obj->{'ContactType'}) ? (string) $obj->{'ContactType'} : null,
            publish: isset($obj->{'Publish'}) ? (bool) $obj->{'Publish'} : null,
            value: isset($obj->{'Value'}) ? (string) $obj->{'Value'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            displayValue: isset($obj->{'DisplayValue'}) ? (string) $obj->{'DisplayValue'} : null,
            displayIcon: isset($obj->{'DisplayIcon'}) ? (string) $obj->{'DisplayIcon'} : null,
            help: isset($obj->{'Help'}) ? (string) $obj->{'Help'} : null,
            icon: isset($obj->{'Icon'}) ? (string) $obj->{'Icon'} : null,
        );
    }
}
