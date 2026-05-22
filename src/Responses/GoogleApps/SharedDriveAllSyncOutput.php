<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class SharedDriveAllSyncOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $driveId = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            driveId: isset($obj->{'DriveId'}) ? (string) $obj->{'DriveId'} : null,
        );
    }
}
