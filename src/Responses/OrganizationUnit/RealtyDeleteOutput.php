<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RealtyDeleteOutput
{
    public function __construct(
        public readonly ?bool $deleted = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            deleted: isset($obj->{'Deleted'}) ? (bool) $obj->{'Deleted'} : null,
        );
    }
}
