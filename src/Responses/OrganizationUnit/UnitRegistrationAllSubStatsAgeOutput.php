<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationAllSubStatsAgeOutput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $unit = null,
        public readonly ?int $children = null,
        public readonly ?int $to26 = null,
        public readonly ?int $from26 = null,
        public readonly ?int $total = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            children: isset($obj->{'Children'}) ? (int) $obj->{'Children'} : null,
            to26: isset($obj->{'To26'}) ? (int) $obj->{'To26'} : null,
            from26: isset($obj->{'From26'}) ? (int) $obj->{'From26'} : null,
            total: isset($obj->{'Total'}) ? (int) $obj->{'Total'} : null,
        );
    }
}
