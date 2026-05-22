<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitHandicapLastUpdatedOutput
{
    public function __construct(
        public readonly ?string $lastUpdated = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            lastUpdated: isset($obj->{'LastUpdated'}) ? (string) $obj->{'LastUpdated'} : null,
        );
    }
}
