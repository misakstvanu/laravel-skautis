<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class SharedDriveAllUnitUsageOutput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?float $spaceUsed = null,
        public readonly ?int $sharedDriveCount = null,
        public readonly ?bool $showWarning = null,
        public readonly ?string $idSharedDriveType = null,
        public readonly ?int $maxUsage = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            spaceUsed: isset($obj->{'SpaceUsed'}) ? (float) $obj->{'SpaceUsed'} : null,
            sharedDriveCount: isset($obj->{'SharedDriveCount'}) ? (int) $obj->{'SharedDriveCount'} : null,
            showWarning: isset($obj->{'ShowWarning'}) ? (bool) $obj->{'ShowWarning'} : null,
            idSharedDriveType: isset($obj->{'ID_SharedDriveType'}) ? (string) $obj->{'ID_SharedDriveType'} : null,
            maxUsage: isset($obj->{'MaxUsage'}) ? (int) $obj->{'MaxUsage'} : null,
        );
    }
}
