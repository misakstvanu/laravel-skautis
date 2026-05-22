<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class GoogleAccountDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            userName: isset($obj->{'UserName'}) ? (string) $obj->{'UserName'} : null,
            idDomain: isset($obj->{'ID_Domain'}) ? (int) $obj->{'ID_Domain'} : null,
            domain: isset($obj->{'Domain'}) ? (string) $obj->{'Domain'} : null,
            isMain: isset($obj->{'IsMain'}) ? (bool) $obj->{'IsMain'} : null,
            isMainContact: isset($obj->{'IsMainContact'}) ? (bool) $obj->{'IsMainContact'} : null,
            password: isset($obj->{'Password'}) ? (string) $obj->{'Password'} : null,
            password2: isset($obj->{'Password2'}) ? (string) $obj->{'Password2'} : null,
            agrees: isset($obj->{'Agrees'}) ? (bool) $obj->{'Agrees'} : null,
            idUnitContact: isset($obj->{'ID_UnitContact'}) ? (int) $obj->{'ID_UnitContact'} : null,
            idPersonContact: isset($obj->{'ID_PersonContact'}) ? (int) $obj->{'ID_PersonContact'} : null,
            idPersonCreated: isset($obj->{'ID_PersonCreated'}) ? (int) $obj->{'ID_PersonCreated'} : null,
            personCreated: isset($obj->{'PersonCreated'}) ? (string) $obj->{'PersonCreated'} : null,
            dateCreated: isset($obj->{'DateCreated'}) ? (string) $obj->{'DateCreated'} : null,
            value: isset($obj->{'Value'}) ? (string) $obj->{'Value'} : null,
            loginUrl: isset($obj->{'LoginUrl'}) ? (string) $obj->{'LoginUrl'} : null,
            idGoogleAccount: isset($obj->{'ID_GoogleAccount'}) ? (int) $obj->{'ID_GoogleAccount'} : null,
            displayNameFirst: isset($obj->{'DisplayNameFirst'}) ? (string) $obj->{'DisplayNameFirst'} : null,
            displayNameLast: isset($obj->{'DisplayNameLast'}) ? (string) $obj->{'DisplayNameLast'} : null,
            onlyValidate: isset($obj->{'OnlyValidate'}) ? (bool) $obj->{'OnlyValidate'} : null,
            shareAllAdded: isset($obj->{'ShareAllAdded'}) ? (string) $obj->{'ShareAllAdded'} : null,
            storageCapacity: isset($obj->{'StorageCapacity'}) ? (float) $obj->{'StorageCapacity'} : null,
            isAdult: isset($obj->{'IsAdult'}) ? (bool) $obj->{'IsAdult'} : null,
            orgUnitPath: isset($obj->{'OrgUnitPath'}) ? (string) $obj->{'OrgUnitPath'} : null,
        );
    }
}
