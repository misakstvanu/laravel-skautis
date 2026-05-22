<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class GoogleAccountDetailOrganizationUnitOutput
{
    public function __construct(
        public readonly ?string $organizationUnitID = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            organizationUnitID: isset($obj->{'OrganizationUnitID'}) ? (string) $obj->{'OrganizationUnitID'} : null,
        );
    }
}
