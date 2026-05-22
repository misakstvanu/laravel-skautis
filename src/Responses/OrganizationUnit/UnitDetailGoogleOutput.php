<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitDetailGoogleOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $domainCount = null,
        public readonly ?int $accountCount = null,
        public readonly ?int $groupCount = null,
        public readonly ?int $groupCountWithAutoRule = null,
        public readonly ?int $sharedDriveCount = null,
        public readonly ?int $sharedDriveCountUnit = null,
        public readonly ?int $sharedDriveCountEvent = null,
        public readonly ?bool $isSharedDriveVisible = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            domainCount: isset($obj->{'DomainCount'}) ? (int) $obj->{'DomainCount'} : null,
            accountCount: isset($obj->{'AccountCount'}) ? (int) $obj->{'AccountCount'} : null,
            groupCount: isset($obj->{'GroupCount'}) ? (int) $obj->{'GroupCount'} : null,
            groupCountWithAutoRule: isset($obj->{'GroupCountWithAutoRule'}) ? (int) $obj->{'GroupCountWithAutoRule'} : null,
            sharedDriveCount: isset($obj->{'SharedDriveCount'}) ? (int) $obj->{'SharedDriveCount'} : null,
            sharedDriveCountUnit: isset($obj->{'SharedDriveCountUnit'}) ? (int) $obj->{'SharedDriveCountUnit'} : null,
            sharedDriveCountEvent: isset($obj->{'SharedDriveCountEvent'}) ? (int) $obj->{'SharedDriveCountEvent'} : null,
            isSharedDriveVisible: isset($obj->{'IsSharedDriveVisible'}) ? (bool) $obj->{'IsSharedDriveVisible'} : null,
        );
    }
}
