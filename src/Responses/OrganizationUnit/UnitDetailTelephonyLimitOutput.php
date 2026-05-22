<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitDetailTelephonyLimitOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $telephonyLimit = null,
        public readonly ?int $dataLimit = null,
        public readonly ?int $defaultCallLimit = null,
        public readonly ?int $defaultDataLimit = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            telephonyLimit: isset($obj->{'TelephonyLimit'}) ? (int) $obj->{'TelephonyLimit'} : null,
            dataLimit: isset($obj->{'DataLimit'}) ? (int) $obj->{'DataLimit'} : null,
            defaultCallLimit: isset($obj->{'DefaultCallLimit'}) ? (int) $obj->{'DefaultCallLimit'} : null,
            defaultDataLimit: isset($obj->{'DefaultDataLimit'}) ? (int) $obj->{'DefaultDataLimit'} : null,
        );
    }
}
