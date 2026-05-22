<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationAllSubStatsAgeTableOutput
{
    public function __construct(
        public readonly ?int $yearFrom = null,
        public readonly ?int $yearTo = null,
        public readonly mixed $dataAll = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            yearFrom: isset($obj->{'YearFrom'}) ? (int) $obj->{'YearFrom'} : null,
            yearTo: isset($obj->{'YearTo'}) ? (int) $obj->{'YearTo'} : null,
            dataAll: $obj->{'DataAll'} ?? null,
        );
    }
}
