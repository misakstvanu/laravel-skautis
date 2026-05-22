<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class GoogleAccountDetailStorageOutput
{
    public function __construct(
        public readonly ?float $totalQuota = null,
        public readonly ?int $photoUsed = null,
        public readonly ?int $driveUsage = null,
        public readonly ?int $emailUsed = null,
        public readonly ?int $totalUsed = null,
        public readonly ?int $totalUsedPercentage = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            totalQuota: isset($obj->{'TotalQuota'}) ? (float) $obj->{'TotalQuota'} : null,
            photoUsed: isset($obj->{'PhotoUsed'}) ? (int) $obj->{'PhotoUsed'} : null,
            driveUsage: isset($obj->{'DriveUsage'}) ? (int) $obj->{'DriveUsage'} : null,
            emailUsed: isset($obj->{'EmailUsed'}) ? (int) $obj->{'EmailUsed'} : null,
            totalUsed: isset($obj->{'TotalUsed'}) ? (int) $obj->{'TotalUsed'} : null,
            totalUsedPercentage: isset($obj->{'TotalUsedPercentage'}) ? (int) $obj->{'TotalUsedPercentage'} : null,
        );
    }
}
