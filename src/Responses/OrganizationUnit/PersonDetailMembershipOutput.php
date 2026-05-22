<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonDetailMembershipOutput
{
    public function __construct(
        public readonly ?bool $isMember = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            isMember: isset($obj->{'IsMember'}) ? (bool) $obj->{'IsMember'} : null,
        );
    }
}
