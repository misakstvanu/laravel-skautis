<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationAllSubStatsTroopTableOutput
{
    public function __construct(
        public readonly ?int $yearFrom = null,
        public readonly ?int $yearTo = null,
        public readonly mixed $dataAll = null,
        public readonly mixed $dataFirst = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            yearFrom: isset($obj->{'YearFrom'}) ? (int) $obj->{'YearFrom'} : null,
            yearTo: isset($obj->{'YearTo'}) ? (int) $obj->{'YearTo'} : null,
            dataAll: $obj->{'DataAll'} ?? null,
            dataFirst: $obj->{'DataFirst'} ?? null,
        );
    }
}
