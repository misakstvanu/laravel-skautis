<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationRentEquipmentAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idOccupationRent = null,
        public readonly ?string $occupationRent = null,
        public readonly ?int $idOccupationEquipment = null,
        public readonly ?string $occupationEquipment = null,
        public readonly ?string $description = null,
        public readonly ?int $idRealtyType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idOccupationRent: isset($obj->{'ID_OccupationRent'}) ? (int) $obj->{'ID_OccupationRent'} : null,
            occupationRent: isset($obj->{'OccupationRent'}) ? (string) $obj->{'OccupationRent'} : null,
            idOccupationEquipment: isset($obj->{'ID_OccupationEquipment'}) ? (int) $obj->{'ID_OccupationEquipment'} : null,
            occupationEquipment: isset($obj->{'OccupationEquipment'}) ? (string) $obj->{'OccupationEquipment'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            idRealtyType: isset($obj->{'ID_RealtyType'}) ? (int) $obj->{'ID_RealtyType'} : null,
        );
    }
}
