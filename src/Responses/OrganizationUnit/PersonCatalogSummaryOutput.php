<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonCatalogSummaryOutput
{
    public function __construct(
        public readonly ?int $personCount = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            personCount: isset($obj->{'PersonCount'}) ? (int) $obj->{'PersonCount'} : null,
        );
    }
}
