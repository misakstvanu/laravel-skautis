<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleGroupSyncSettingsAllInput
{
    public function __construct(
        public readonly ?int $idGoogleGroup = null,
        public readonly ?int $id = null,
        public readonly ?string $idSyncLevelType = null,
        public readonly ?string $idSyncType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_GoogleGroup' => $this->idGoogleGroup,
            'ID' => $this->id,
            'ID_SyncLevelType' => $this->idSyncLevelType,
            'ID_SyncType' => $this->idSyncType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
