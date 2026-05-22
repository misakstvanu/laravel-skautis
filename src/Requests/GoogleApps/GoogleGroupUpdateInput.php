<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleGroupUpdateInput
{
    public function __construct(
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'Email' => $this->email,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'DateCreate' => $this->dateCreate,
            'ID_GoogleGroupMain' => $this->idGoogleGroupMain,
            'GoogleGroupMainEmail' => $this->googleGroupMainEmail,
            'Description' => $this->description,
            'ID_Domain' => $this->idDomain,
            'EmailName' => $this->emailName,
            'OwnerEmail' => $this->ownerEmail,
            'MemberCount' => $this->memberCount,
            'Valid' => $this->valid,
            'LastSync' => $this->lastSync,
            'ID_SyncType' => $this->idSyncType,
            'IsAutoSync' => $this->isAutoSync,
            'SyncType' => $this->syncType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
