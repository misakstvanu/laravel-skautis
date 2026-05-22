<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationAllParentOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $year = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
        );
    }
}
