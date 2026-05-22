<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class SyncSettingsMembershipCategoryAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroupSyncSettings = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $membershipCategory = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGoogleGroupSyncSettings: isset($obj->{'ID_GoogleGroupSyncSettings'}) ? (int) $obj->{'ID_GoogleGroupSyncSettings'} : null,
            idMembershipCategory: isset($obj->{'ID_MembershipCategory'}) ? (string) $obj->{'ID_MembershipCategory'} : null,
            membershipCategory: isset($obj->{'MembershipCategory'}) ? (string) $obj->{'MembershipCategory'} : null,
        );
    }
}
