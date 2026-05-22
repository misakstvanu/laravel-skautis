<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class SyncSettingsUnitAllInput
{
    public function __construct(
        public readonly ?int $idGoogleGroupSyncSettings = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_GoogleGroupSyncSettings' => $this->idGoogleGroupSyncSettings,
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
