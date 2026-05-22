<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class GoogleGroupDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $email = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $dateCreate = null,
        public readonly ?int $idGoogleGroupMain = null,
        public readonly ?string $googleGroupMainEmail = null,
        public readonly ?string $description = null,
        public readonly ?int $idDomain = null,
        public readonly ?string $emailName = null,
        public readonly ?string $ownerEmail = null,
        public readonly ?int $memberCount = null,
        public readonly ?bool $valid = null,
        public readonly ?string $lastSync = null,
        public readonly ?string $idSyncType = null,
        public readonly ?bool $isAutoSync = null,
        public readonly ?string $syncType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            idGoogleGroupMain: isset($obj->{'ID_GoogleGroupMain'}) ? (int) $obj->{'ID_GoogleGroupMain'} : null,
            googleGroupMainEmail: isset($obj->{'GoogleGroupMainEmail'}) ? (string) $obj->{'GoogleGroupMainEmail'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            idDomain: isset($obj->{'ID_Domain'}) ? (int) $obj->{'ID_Domain'} : null,
            emailName: isset($obj->{'EmailName'}) ? (string) $obj->{'EmailName'} : null,
            ownerEmail: isset($obj->{'OwnerEmail'}) ? (string) $obj->{'OwnerEmail'} : null,
            memberCount: isset($obj->{'MemberCount'}) ? (int) $obj->{'MemberCount'} : null,
            valid: isset($obj->{'Valid'}) ? (bool) $obj->{'Valid'} : null,
            lastSync: isset($obj->{'LastSync'}) ? (string) $obj->{'LastSync'} : null,
            idSyncType: isset($obj->{'ID_SyncType'}) ? (string) $obj->{'ID_SyncType'} : null,
            isAutoSync: isset($obj->{'IsAutoSync'}) ? (bool) $obj->{'IsAutoSync'} : null,
            syncType: isset($obj->{'SyncType'}) ? (string) $obj->{'SyncType'} : null,
        );
    }
}
