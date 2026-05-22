<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class SharedDriveDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $driveId = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $idSharedDriveType = null,
        public readonly ?string $sharedDriveType = null,
        public readonly ?string $displayName = null,
        public readonly ?string $eventName = null,
        public readonly ?string $dateCreated = null,
        public readonly ?int $idUserCreated = null,
        public readonly ?string $userCreated = null,
        public readonly ?float $spaceUsed = null,
        public readonly ?int $idPersonAdmin = null,
        public readonly ?string $adminEmail = null,
        public readonly ?string $dateUpdated = null,
        public readonly ?string $note = null,
        public readonly ?string $orgUnitPath = null,
        public readonly ?bool $checkConditions = null,
        public readonly ?int $idPersonCreated = null,
        public readonly ?bool $showEventName = null,
        public readonly ?string $dateUpdatedClass = null,
        public readonly ?bool $showAdminLink = null,
        public readonly ?string $syncError = null,
        public readonly ?string $dateSyncError = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            driveId: isset($obj->{'DriveId'}) ? (string) $obj->{'DriveId'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idSharedDriveType: isset($obj->{'ID_SharedDriveType'}) ? (string) $obj->{'ID_SharedDriveType'} : null,
            sharedDriveType: isset($obj->{'SharedDriveType'}) ? (string) $obj->{'SharedDriveType'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            eventName: isset($obj->{'EventName'}) ? (string) $obj->{'EventName'} : null,
            dateCreated: isset($obj->{'DateCreated'}) ? (string) $obj->{'DateCreated'} : null,
            idUserCreated: isset($obj->{'ID_UserCreated'}) ? (int) $obj->{'ID_UserCreated'} : null,
            userCreated: isset($obj->{'UserCreated'}) ? (string) $obj->{'UserCreated'} : null,
            spaceUsed: isset($obj->{'SpaceUsed'}) ? (float) $obj->{'SpaceUsed'} : null,
            idPersonAdmin: isset($obj->{'ID_PersonAdmin'}) ? (int) $obj->{'ID_PersonAdmin'} : null,
            adminEmail: isset($obj->{'AdminEmail'}) ? (string) $obj->{'AdminEmail'} : null,
            dateUpdated: isset($obj->{'DateUpdated'}) ? (string) $obj->{'DateUpdated'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            orgUnitPath: isset($obj->{'OrgUnitPath'}) ? (string) $obj->{'OrgUnitPath'} : null,
            checkConditions: isset($obj->{'CheckConditions'}) ? (bool) $obj->{'CheckConditions'} : null,
            idPersonCreated: isset($obj->{'ID_PersonCreated'}) ? (int) $obj->{'ID_PersonCreated'} : null,
            showEventName: isset($obj->{'ShowEventName'}) ? (bool) $obj->{'ShowEventName'} : null,
            dateUpdatedClass: isset($obj->{'DateUpdatedClass'}) ? (string) $obj->{'DateUpdatedClass'} : null,
            showAdminLink: isset($obj->{'ShowAdminLink'}) ? (bool) $obj->{'ShowAdminLink'} : null,
            syncError: isset($obj->{'SyncError'}) ? (string) $obj->{'SyncError'} : null,
            dateSyncError: isset($obj->{'DateSyncError'}) ? (string) $obj->{'DateSyncError'} : null,
        );
    }
}
