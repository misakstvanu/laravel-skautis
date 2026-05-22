<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleGroupSyncRequestAllInput
{
    public function __construct(
        public readonly ?int $idGoogleGroup = null,
        public readonly ?int $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_GoogleGroup' => $this->idGoogleGroup,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
