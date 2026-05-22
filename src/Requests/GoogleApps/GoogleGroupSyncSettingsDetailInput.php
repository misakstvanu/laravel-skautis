<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleGroupSyncSettingsDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroup = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_GoogleGroup' => $this->idGoogleGroup,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
