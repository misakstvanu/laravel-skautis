<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RealtyAllRealtyTypeCountPublicOutput
{
    public function __construct(
        public readonly ?int $count = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            count: isset($obj->{'Count'}) ? (int) $obj->{'Count'} : null,
        );
    }
}
