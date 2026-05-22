<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class SharedDriveInsertInput
{
    public function __construct(
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DriveId' => $this->driveId,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'ID_SharedDriveType' => $this->idSharedDriveType,
            'SharedDriveType' => $this->sharedDriveType,
            'DisplayName' => $this->displayName,
            'EventName' => $this->eventName,
            'DateCreated' => $this->dateCreated,
            'ID_UserCreated' => $this->idUserCreated,
            'UserCreated' => $this->userCreated,
            'SpaceUsed' => $this->spaceUsed,
            'ID_PersonAdmin' => $this->idPersonAdmin,
            'AdminEmail' => $this->adminEmail,
            'DateUpdated' => $this->dateUpdated,
            'Note' => $this->note,
            'OrgUnitPath' => $this->orgUnitPath,
            'CheckConditions' => $this->checkConditions,
            'ID_PersonCreated' => $this->idPersonCreated,
            'ShowEventName' => $this->showEventName,
            'DateUpdatedClass' => $this->dateUpdatedClass,
            'ShowAdminLink' => $this->showAdminLink,
            'SyncError' => $this->syncError,
            'DateSyncError' => $this->dateSyncError,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
