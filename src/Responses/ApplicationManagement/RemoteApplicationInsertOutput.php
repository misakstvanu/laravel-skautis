<?php

namespace Misakstvanu\LaravelSkautis\Responses\ApplicationManagement;

final class RemoteApplicationInsertOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            idApplication: isset($obj->{'ID_Application'}) ? (string) $obj->{'ID_Application'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            enabled: isset($obj->{'Enabled'}) ? (bool) $obj->{'Enabled'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            unitName: isset($obj->{'UnitName'}) ? (string) $obj->{'UnitName'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            iP: isset($obj->{'IP'}) ? (string) $obj->{'IP'} : null,
            url: isset($obj->{'Url'}) ? (string) $obj->{'Url'} : null,
            urlLoginPage: isset($obj->{'UrlLoginPage'}) ? (string) $obj->{'UrlLoginPage'} : null,
            urlLogoutPage: isset($obj->{'UrlLogoutPage'}) ? (string) $obj->{'UrlLogoutPage'} : null,
            urlInfoPanel: isset($obj->{'UrlInfoPanel'}) ? (string) $obj->{'UrlInfoPanel'} : null,
            validReturnUrl: isset($obj->{'ValidReturnUrl'}) ? (string) $obj->{'ValidReturnUrl'} : null,
            isAnonymous: isset($obj->{'IsAnonymous'}) ? (bool) $obj->{'IsAnonymous'} : null,
            isAllActions: isset($obj->{'IsAllActions'}) ? (bool) $obj->{'IsAllActions'} : null,
            isPersistentLogin: isset($obj->{'IsPersistentLogin'}) ? (bool) $obj->{'IsPersistentLogin'} : null,
            idRole: isset($obj->{'ID_Role'}) ? (int) $obj->{'ID_Role'} : null,
            role: isset($obj->{'Role'}) ? (string) $obj->{'Role'} : null,
            idGroupLogin: isset($obj->{'ID_GroupLogin'}) ? (int) $obj->{'ID_GroupLogin'} : null,
        );
    }
}
