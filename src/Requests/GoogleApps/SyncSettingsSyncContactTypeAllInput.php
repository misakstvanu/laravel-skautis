<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class SyncSettingsSyncContactTypeAllInput
{
    public function __construct(
        public readonly ?int $idGoogleGroupSyncSettings = null,
        public readonly ?int $id = null,
        public readonly ?string $idSyncContactType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_GoogleGroupSyncSettings' => $this->idGoogleGroupSyncSettings,
            'ID' => $this->id,
            'ID_SyncContactType' => $this->idSyncContactType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
