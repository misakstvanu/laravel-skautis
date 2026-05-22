<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MembershipTypeAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $canEdit = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            canEdit: isset($obj->{'CanEdit'}) ? (bool) $obj->{'CanEdit'} : null,
        );
    }
}
