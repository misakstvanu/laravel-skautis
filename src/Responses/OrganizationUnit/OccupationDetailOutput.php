<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idRealty = null,
        public readonly ?bool $publish = null,
        public readonly ?string $note = null,
        public readonly ?int $idRealtyType = null,
        public readonly ?string $realtyType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            idRealty: isset($obj->{'ID_Realty'}) ? (int) $obj->{'ID_Realty'} : null,
            publish: isset($obj->{'Publish'}) ? (bool) $obj->{'Publish'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idRealtyType: isset($obj->{'ID_RealtyType'}) ? (int) $obj->{'ID_RealtyType'} : null,
            realtyType: isset($obj->{'RealtyType'}) ? (string) $obj->{'RealtyType'} : null,
        );
    }
}
