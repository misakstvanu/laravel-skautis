<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class DomainDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $description = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idDomainState = null,
        public readonly ?string $domainState = null,
        public readonly ?int $idPersonCreated = null,
        public readonly ?string $personCreated = null,
        public readonly ?bool $onlyMember = null,
        public readonly ?bool $onlyAfter15 = null,
        public readonly ?bool $onlyCinovnik = null,
        public readonly ?bool $onlyAdminCreate = null,
        public readonly ?string $dateActivate = null,
        public readonly ?string $note = null,
        public readonly ?bool $isUsed = null,
        public readonly ?int $idPersonAdmin = null,
        public readonly ?bool $activateGA = null,
        public readonly ?int $idDomainMain = null,
        public readonly ?bool $validateDomain = null,
        public readonly ?bool $validateAdmin = null,
        public readonly ?string $alias = null,
        public readonly ?bool $hosting = null,
        public readonly ?string $dNS = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idDomainState: isset($obj->{'ID_DomainState'}) ? (string) $obj->{'ID_DomainState'} : null,
            domainState: isset($obj->{'DomainState'}) ? (string) $obj->{'DomainState'} : null,
            idPersonCreated: isset($obj->{'ID_PersonCreated'}) ? (int) $obj->{'ID_PersonCreated'} : null,
            personCreated: isset($obj->{'PersonCreated'}) ? (string) $obj->{'PersonCreated'} : null,
            onlyMember: isset($obj->{'OnlyMember'}) ? (bool) $obj->{'OnlyMember'} : null,
            onlyAfter15: isset($obj->{'OnlyAfter15'}) ? (bool) $obj->{'OnlyAfter15'} : null,
            onlyCinovnik: isset($obj->{'OnlyCinovnik'}) ? (bool) $obj->{'OnlyCinovnik'} : null,
            onlyAdminCreate: isset($obj->{'OnlyAdminCreate'}) ? (bool) $obj->{'OnlyAdminCreate'} : null,
            dateActivate: isset($obj->{'DateActivate'}) ? (string) $obj->{'DateActivate'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isUsed: isset($obj->{'IsUsed'}) ? (bool) $obj->{'IsUsed'} : null,
            idPersonAdmin: isset($obj->{'ID_PersonAdmin'}) ? (int) $obj->{'ID_PersonAdmin'} : null,
            activateGA: isset($obj->{'ActivateGA'}) ? (bool) $obj->{'ActivateGA'} : null,
            idDomainMain: isset($obj->{'ID_DomainMain'}) ? (int) $obj->{'ID_DomainMain'} : null,
            validateDomain: isset($obj->{'ValidateDomain'}) ? (bool) $obj->{'ValidateDomain'} : null,
            validateAdmin: isset($obj->{'ValidateAdmin'}) ? (bool) $obj->{'ValidateAdmin'} : null,
            alias: isset($obj->{'Alias'}) ? (string) $obj->{'Alias'} : null,
            hosting: isset($obj->{'Hosting'}) ? (bool) $obj->{'Hosting'} : null,
            dNS: isset($obj->{'DNS'}) ? (string) $obj->{'DNS'} : null,
        );
    }
}
