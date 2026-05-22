<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class DomainAllUnitOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $description = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idDomainState = null,
        public readonly ?string $domainState = null,
        public readonly ?bool $onlyMember = null,
        public readonly ?bool $onlyAfter15 = null,
        public readonly ?bool $onlyCinovnik = null,
        public readonly ?bool $onlyAdminCreate = null,
        public readonly ?string $dateActivate = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idDomainState: isset($obj->{'ID_DomainState'}) ? (string) $obj->{'ID_DomainState'} : null,
            domainState: isset($obj->{'DomainState'}) ? (string) $obj->{'DomainState'} : null,
            onlyMember: isset($obj->{'OnlyMember'}) ? (bool) $obj->{'OnlyMember'} : null,
            onlyAfter15: isset($obj->{'OnlyAfter15'}) ? (bool) $obj->{'OnlyAfter15'} : null,
            onlyCinovnik: isset($obj->{'OnlyCinovnik'}) ? (bool) $obj->{'OnlyCinovnik'} : null,
            onlyAdminCreate: isset($obj->{'OnlyAdminCreate'}) ? (bool) $obj->{'OnlyAdminCreate'} : null,
            dateActivate: isset($obj->{'DateActivate'}) ? (string) $obj->{'DateActivate'} : null,
        );
    }
}
