<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationAllStatsOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $year = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $childCount = null,
        public readonly ?int $youngAdultCount = null,
        public readonly ?int $adultCount = null,
        public readonly ?int $totalCount = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            childCount: isset($obj->{'ChildCount'}) ? (int) $obj->{'ChildCount'} : null,
            youngAdultCount: isset($obj->{'YoungAdultCount'}) ? (int) $obj->{'YoungAdultCount'} : null,
            adultCount: isset($obj->{'AdultCount'}) ? (int) $obj->{'AdultCount'} : null,
            totalCount: isset($obj->{'TotalCount'}) ? (int) $obj->{'TotalCount'} : null,
        );
    }
}
