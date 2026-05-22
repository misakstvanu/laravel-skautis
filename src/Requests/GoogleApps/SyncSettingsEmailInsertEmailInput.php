<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class SyncSettingsEmailInsertEmailInput
{
    public function __construct(
        public readonly ?int $idGoogleGroup = null,
        public readonly ?string $string = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_GoogleGroup' => $this->idGoogleGroup,
            'string' => $this->string,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
