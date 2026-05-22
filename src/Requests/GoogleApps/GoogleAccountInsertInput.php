<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleAccountInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $userName = null,
        public readonly ?int $idDomain = null,
        public readonly ?string $domain = null,
        public readonly ?bool $isMain = null,
        public readonly ?bool $isMainContact = null,
        public readonly ?string $password = null,
        public readonly ?string $password2 = null,
        public readonly ?bool $agrees = null,
        public readonly ?int $idUnitContact = null,
        public readonly ?int $idPersonContact = null,
        public readonly ?int $idPersonCreated = null,
        public readonly ?string $personCreated = null,
        public readonly ?string $dateCreated = null,
        public readonly ?string $value = null,
        public readonly ?string $loginUrl = null,
        public readonly ?int $idGoogleAccount = null,
        public readonly ?string $displayNameFirst = null,
        public readonly ?string $displayNameLast = null,
        public readonly ?bool $onlyValidate = null,
        public readonly ?string $shareAllAdded = null,
        public readonly ?float $storageCapacity = null,
        public readonly ?bool $isAdult = null,
        public readonly ?string $orgUnitPath = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'UserName' => $this->userName,
            'ID_Domain' => $this->idDomain,
            'Domain' => $this->domain,
            'IsMain' => $this->isMain,
            'IsMainContact' => $this->isMainContact,
            'Password' => $this->password,
            'Password2' => $this->password2,
            'Agrees' => $this->agrees,
            'ID_UnitContact' => $this->idUnitContact,
            'ID_PersonContact' => $this->idPersonContact,
            'ID_PersonCreated' => $this->idPersonCreated,
            'PersonCreated' => $this->personCreated,
            'DateCreated' => $this->dateCreated,
            'Value' => $this->value,
            'LoginUrl' => $this->loginUrl,
            'ID_GoogleAccount' => $this->idGoogleAccount,
            'DisplayNameFirst' => $this->displayNameFirst,
            'DisplayNameLast' => $this->displayNameLast,
            'OnlyValidate' => $this->onlyValidate,
            'ShareAllAdded' => $this->shareAllAdded,
            'StorageCapacity' => $this->storageCapacity,
            'IsAdult' => $this->isAdult,
            'OrgUnitPath' => $this->orgUnitPath,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
