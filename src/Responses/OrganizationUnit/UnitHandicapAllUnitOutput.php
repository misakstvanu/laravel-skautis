<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitHandicapAllUnitOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $dateUpdate = null,
        public readonly ?int $idHandicapType = null,
        public readonly ?string $handicapType = null,
        public readonly ?string $help = null,
        public readonly ?int $value = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            dateUpdate: isset($obj->{'DateUpdate'}) ? (string) $obj->{'DateUpdate'} : null,
            idHandicapType: isset($obj->{'ID_HandicapType'}) ? (int) $obj->{'ID_HandicapType'} : null,
            handicapType: isset($obj->{'HandicapType'}) ? (string) $obj->{'HandicapType'} : null,
            help: isset($obj->{'Help'}) ? (string) $obj->{'Help'} : null,
            value: isset($obj->{'Value'}) ? (int) $obj->{'Value'} : null,
        );
    }
}
