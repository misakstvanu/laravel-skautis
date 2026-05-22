<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleGroupSyncRequestUpdateErrorInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroup = null,
        public readonly ?string $googleGroup = null,
        public readonly ?string $created = null,
        public readonly ?string $synced = null,
        public readonly ?bool $isSyncing = null,
        public readonly ?string $exception = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_GoogleGroup' => $this->idGoogleGroup,
            'GoogleGroup' => $this->googleGroup,
            'Created' => $this->created,
            'Synced' => $this->synced,
            'IsSyncing' => $this->isSyncing,
            'Exception' => $this->exception,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
