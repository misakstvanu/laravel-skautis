<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class SyncSettingsMembershipCategoryInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroupSyncSettings = null,
        public readonly ?string $string = null,
        public readonly ?string $idMembershipCategory = null,
        public readonly ?string $membershipCategory = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_GoogleGroupSyncSettings' => $this->idGoogleGroupSyncSettings,
            'string' => $this->string,
            'ID_MembershipCategory' => $this->idMembershipCategory,
            'MembershipCategory' => $this->membershipCategory,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
