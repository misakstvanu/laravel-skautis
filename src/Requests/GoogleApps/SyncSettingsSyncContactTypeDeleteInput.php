<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class SyncSettingsSyncContactTypeDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroupSyncSettings = null,
        public readonly ?string $idSyncContactType = null,
        public readonly ?string $syncContactType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_GoogleGroupSyncSettings' => $this->idGoogleGroupSyncSettings,
            'ID_SyncContactType' => $this->idSyncContactType,
            'SyncContactType' => $this->syncContactType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
