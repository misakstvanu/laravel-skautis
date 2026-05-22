<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class MembershipDetailPersonDataOutput
{
    public function __construct(
        public readonly ?string $membershipFrom = null,
        public readonly ?string $membershipTo = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            membershipFrom: isset($obj->{'MembershipFrom'}) ? (string) $obj->{'MembershipFrom'} : null,
            membershipTo: isset($obj->{'MembershipTo'}) ? (string) $obj->{'MembershipTo'} : null,
        );
    }
}
