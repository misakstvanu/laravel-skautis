<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class SettingsAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?int $idSettingsGroup = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_SettingsGroup' => $this->idSettingsGroup,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
