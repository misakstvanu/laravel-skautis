<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationAllStatsCategoryOutput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?int $benjaminek = null,
        public readonly ?int $svetluska = null,
        public readonly ?int $vlce = null,
        public readonly ?int $skautka = null,
        public readonly ?int $skaut = null,
        public readonly ?int $ranger = null,
        public readonly ?int $rover = null,
        public readonly ?int $dospely = null,
        public readonly ?int $ostatni = null,
        public readonly ?int $svetluskaVlce = null,
        public readonly ?int $skautkaSkaut = null,
        public readonly ?int $rangerRover = null,
        public readonly ?int $total = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            benjaminek: isset($obj->{'Benjaminek'}) ? (int) $obj->{'Benjaminek'} : null,
            svetluska: isset($obj->{'Svetluska'}) ? (int) $obj->{'Svetluska'} : null,
            vlce: isset($obj->{'Vlce'}) ? (int) $obj->{'Vlce'} : null,
            skautka: isset($obj->{'Skautka'}) ? (int) $obj->{'Skautka'} : null,
            skaut: isset($obj->{'Skaut'}) ? (int) $obj->{'Skaut'} : null,
            ranger: isset($obj->{'Ranger'}) ? (int) $obj->{'Ranger'} : null,
            rover: isset($obj->{'Rover'}) ? (int) $obj->{'Rover'} : null,
            dospely: isset($obj->{'Dospely'}) ? (int) $obj->{'Dospely'} : null,
            ostatni: isset($obj->{'Ostatni'}) ? (int) $obj->{'Ostatni'} : null,
            svetluskaVlce: isset($obj->{'SvetluskaVlce'}) ? (int) $obj->{'SvetluskaVlce'} : null,
            skautkaSkaut: isset($obj->{'SkautkaSkaut'}) ? (int) $obj->{'SkautkaSkaut'} : null,
            rangerRover: isset($obj->{'RangerRover'}) ? (int) $obj->{'RangerRover'} : null,
            total: isset($obj->{'Total'}) ? (int) $obj->{'Total'} : null,
        );
    }
}
