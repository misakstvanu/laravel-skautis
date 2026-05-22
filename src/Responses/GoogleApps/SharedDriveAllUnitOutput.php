<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class SharedDriveAllUnitOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $driveId = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idSharedDriveType = null,
        public readonly ?string $sharedDriveType = null,
        public readonly ?string $displayName = null,
        public readonly ?string $eventName = null,
        public readonly ?string $dateUpdated = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            driveId: isset($obj->{'DriveId'}) ? (string) $obj->{'DriveId'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            idSharedDriveType: isset($obj->{'ID_SharedDriveType'}) ? (string) $obj->{'ID_SharedDriveType'} : null,
            sharedDriveType: isset($obj->{'SharedDriveType'}) ? (string) $obj->{'SharedDriveType'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            eventName: isset($obj->{'EventName'}) ? (string) $obj->{'EventName'} : null,
            dateUpdated: isset($obj->{'DateUpdated'}) ? (string) $obj->{'DateUpdated'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
