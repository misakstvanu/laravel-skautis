<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationEquipmentAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $description = null,
        public readonly ?string $note = null,
        public readonly ?bool $isActive = null,
        public readonly ?int $order = null,
        public readonly ?int $idRealtyType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            idRealtyType: isset($obj->{'ID_RealtyType'}) ? (int) $obj->{'ID_RealtyType'} : null,
        );
    }
}
