<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class ContactTypeAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isMain = null,
        public readonly ?string $note = null,
        public readonly ?bool $isForPerson = null,
        public readonly ?bool $isForUnit = null,
        public readonly ?bool $isSts = null,
        public readonly ?bool $isGa = null,
        public readonly ?bool $hideable = null,
        public readonly ?string $validation = null,
        public readonly ?string $xhtmlDisplay = null,
        public readonly ?string $xhtmlIcon = null,
        public readonly ?string $help = null,
        public readonly ?string $icon = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isMain: isset($obj->{'IsMain'}) ? (bool) $obj->{'IsMain'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isForPerson: isset($obj->{'IsForPerson'}) ? (bool) $obj->{'IsForPerson'} : null,
            isForUnit: isset($obj->{'IsForUnit'}) ? (bool) $obj->{'IsForUnit'} : null,
            isSts: isset($obj->{'IsSts'}) ? (bool) $obj->{'IsSts'} : null,
            isGa: isset($obj->{'IsGa'}) ? (bool) $obj->{'IsGa'} : null,
            hideable: isset($obj->{'Hideable'}) ? (bool) $obj->{'Hideable'} : null,
            validation: isset($obj->{'Validation'}) ? (string) $obj->{'Validation'} : null,
            xhtmlDisplay: isset($obj->{'XhtmlDisplay'}) ? (string) $obj->{'XhtmlDisplay'} : null,
            xhtmlIcon: isset($obj->{'XhtmlIcon'}) ? (string) $obj->{'XhtmlIcon'} : null,
            help: isset($obj->{'Help'}) ? (string) $obj->{'Help'} : null,
            icon: isset($obj->{'Icon'}) ? (string) $obj->{'Icon'} : null,
        );
    }
}
