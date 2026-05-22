<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantTypeAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $name = null,
        public readonly ?string $note = null,
        public readonly ?int $code = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?int $isActive = null,
        public readonly ?bool $forUnit = null,
        public readonly ?bool $forEvent = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            name: isset($obj->{'Name'}) ? (string) $obj->{'Name'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            code: isset($obj->{'Code'}) ? (int) $obj->{'Code'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            isActive: isset($obj->{'IsActive'}) ? (int) $obj->{'IsActive'} : null,
            forUnit: isset($obj->{'ForUnit'}) ? (bool) $obj->{'ForUnit'} : null,
            forEvent: isset($obj->{'ForEvent'}) ? (bool) $obj->{'ForEvent'} : null,
        );
    }
}
