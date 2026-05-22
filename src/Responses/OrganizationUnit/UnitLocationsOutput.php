<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitLocationsOutput
{
    public function __construct(
        public readonly ?bool $isSelected = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idMunicipality = null,
        public readonly ?int $idRegion = null,
        public readonly ?int $idDistrict = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            isSelected: isset($obj->{'IsSelected'}) ? (bool) $obj->{'IsSelected'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idMunicipality: isset($obj->{'ID_Municipality'}) ? (int) $obj->{'ID_Municipality'} : null,
            idRegion: isset($obj->{'ID_Region'}) ? (int) $obj->{'ID_Region'} : null,
            idDistrict: isset($obj->{'ID_District'}) ? (int) $obj->{'ID_District'} : null,
        );
    }
}
