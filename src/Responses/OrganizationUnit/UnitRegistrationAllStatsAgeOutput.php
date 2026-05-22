<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationAllStatsAgeOutput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?int $to6 = null,
        public readonly ?int $to15 = null,
        public readonly ?int $to18 = null,
        public readonly ?int $to26 = null,
        public readonly ?int $from26 = null,
        public readonly ?int $children = null,
        public readonly ?int $adult = null,
        public readonly ?int $total = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            to6: isset($obj->{'To6'}) ? (int) $obj->{'To6'} : null,
            to15: isset($obj->{'To15'}) ? (int) $obj->{'To15'} : null,
            to18: isset($obj->{'To18'}) ? (int) $obj->{'To18'} : null,
            to26: isset($obj->{'To26'}) ? (int) $obj->{'To26'} : null,
            from26: isset($obj->{'From26'}) ? (int) $obj->{'From26'} : null,
            children: isset($obj->{'Children'}) ? (int) $obj->{'Children'} : null,
            adult: isset($obj->{'Adult'}) ? (int) $obj->{'Adult'} : null,
            total: isset($obj->{'Total'}) ? (int) $obj->{'Total'} : null,
        );
    }
}
