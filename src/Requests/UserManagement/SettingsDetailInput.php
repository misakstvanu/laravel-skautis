<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class SettingsDetailInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
