<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleAccountUpdateSyncInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $unitEmail = null,
        public readonly ?string $personEmail = null,
        public readonly ?string $oldGroup = null,
        public readonly ?string $newGroup = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'UnitEmail' => $this->unitEmail,
            'PersonEmail' => $this->personEmail,
            'OldGroup' => $this->oldGroup,
            'NewGroup' => $this->newGroup,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
