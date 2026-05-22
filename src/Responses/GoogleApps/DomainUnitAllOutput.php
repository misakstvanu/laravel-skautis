<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class DomainUnitAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idDomain = null,
        public readonly ?string $domain = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?bool $includeChildUnit = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idDomain: isset($obj->{'ID_Domain'}) ? (int) $obj->{'ID_Domain'} : null,
            domain: isset($obj->{'Domain'}) ? (string) $obj->{'Domain'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            includeChildUnit: isset($obj->{'IncludeChildUnit'}) ? (bool) $obj->{'IncludeChildUnit'} : null,
        );
    }
}
