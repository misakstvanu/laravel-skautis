<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class AgencyAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $displayName = null,
        public readonly ?string $code = null,
        public readonly ?string $note = null,
        public readonly ?string $key = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            key: isset($obj->{'Key'}) ? (string) $obj->{'Key'} : null,
        );
    }
}
