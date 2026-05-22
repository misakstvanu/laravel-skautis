<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class UnitDefaultOrganizationUnitDetailUnitOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $defaultOrganizationUnit = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            defaultOrganizationUnit: isset($obj->{'DefaultOrganizationUnit'}) ? (string) $obj->{'DefaultOrganizationUnit'} : null,
        );
    }
}
