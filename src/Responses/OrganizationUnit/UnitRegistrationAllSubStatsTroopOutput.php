<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationAllSubStatsTroopOutput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?int $idTroopArt = null,
        public readonly ?string $troopArt = null,
        public readonly ?int $total = null,
        public readonly ?float $average = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            idTroopArt: isset($obj->{'ID_TroopArt'}) ? (int) $obj->{'ID_TroopArt'} : null,
            troopArt: isset($obj->{'TroopArt'}) ? (string) $obj->{'TroopArt'} : null,
            total: isset($obj->{'Total'}) ? (int) $obj->{'Total'} : null,
            average: isset($obj->{'Average'}) ? (float) $obj->{'Average'} : null,
        );
    }
}
