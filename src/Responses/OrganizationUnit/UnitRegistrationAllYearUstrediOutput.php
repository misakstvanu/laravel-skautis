<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationAllYearUstrediOutput
{
    public function __construct(
        public readonly ?int $year = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
        );
    }
}
