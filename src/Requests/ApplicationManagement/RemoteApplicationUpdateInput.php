<?php

namespace Misakstvanu\LaravelSkautis\Requests\ApplicationManagement;

final class RemoteApplicationUpdateInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $displayName = null,
        public readonly ?string $description = null,
        public readonly ?bool $enabled = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $unitName = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $iP = null,
        public readonly ?string $url = null,
        public readonly ?string $urlLoginPage = null,
        public readonly ?string $urlLogoutPage = null,
        public readonly ?string $urlInfoPanel = null,
        public readonly ?string $validReturnUrl = null,
        public readonly ?bool $isAnonymous = null,
        public readonly ?bool $isAllActions = null,
        public readonly ?bool $isPersistentLogin = null,
        public readonly ?int $idRole = null,
        public readonly ?string $role = null,
        public readonly ?int $idGroupLogin = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'DisplayName' => $this->displayName,
            'Description' => $this->description,
            'Enabled' => $this->enabled,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'UnitName' => $this->unitName,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'IP' => $this->iP,
            'Url' => $this->url,
            'UrlLoginPage' => $this->urlLoginPage,
            'UrlLogoutPage' => $this->urlLogoutPage,
            'UrlInfoPanel' => $this->urlInfoPanel,
            'ValidReturnUrl' => $this->validReturnUrl,
            'IsAnonymous' => $this->isAnonymous,
            'IsAllActions' => $this->isAllActions,
            'IsPersistentLogin' => $this->isPersistentLogin,
            'ID_Role' => $this->idRole,
            'Role' => $this->role,
            'ID_GroupLogin' => $this->idGroupLogin,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
