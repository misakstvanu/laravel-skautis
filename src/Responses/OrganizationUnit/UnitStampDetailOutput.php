<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitStampDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idStampType = null,
        public readonly ?string $stampType = null,
        public readonly ?int $count = null,
        public readonly ?string $email = null,
        public readonly ?string $web = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idStampType: isset($obj->{'ID_StampType'}) ? (string) $obj->{'ID_StampType'} : null,
            stampType: isset($obj->{'StampType'}) ? (string) $obj->{'StampType'} : null,
            count: isset($obj->{'Count'}) ? (int) $obj->{'Count'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            web: isset($obj->{'Web'}) ? (string) $obj->{'Web'} : null,
        );
    }
}
