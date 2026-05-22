<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class DomainUpdateInput
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'Description' => $this->description,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'ID_DomainState' => $this->idDomainState,
            'DomainState' => $this->domainState,
            'ID_PersonCreated' => $this->idPersonCreated,
            'PersonCreated' => $this->personCreated,
            'OnlyMember' => $this->onlyMember,
            'OnlyAfter15' => $this->onlyAfter15,
            'OnlyCinovnik' => $this->onlyCinovnik,
            'OnlyAdminCreate' => $this->onlyAdminCreate,
            'DateActivate' => $this->dateActivate,
            'Note' => $this->note,
            'IsUsed' => $this->isUsed,
            'ID_PersonAdmin' => $this->idPersonAdmin,
            'ActivateGA' => $this->activateGA,
            'ID_DomainMain' => $this->idDomainMain,
            'ValidateDomain' => $this->validateDomain,
            'ValidateAdmin' => $this->validateAdmin,
            'Alias' => $this->alias,
            'Hosting' => $this->hosting,
            'DNS' => $this->dNS,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
