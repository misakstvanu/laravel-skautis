<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationAllSubStatsTypeOutput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
        public readonly ?int $total = null,
        public readonly ?int $totalWater = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
            total: isset($obj->{'Total'}) ? (int) $obj->{'Total'} : null,
            totalWater: isset($obj->{'TotalWater'}) ? (int) $obj->{'TotalWater'} : null,
        );
    }
}
