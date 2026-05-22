<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class SettingsUpdateInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $value = null,
        public readonly ?string $note = null,
        public readonly ?bool $isPublic = null,
        public readonly ?bool $isAuthentized = null,
        public readonly ?string $idPermission = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'Value' => $this->value,
            'Note' => $this->note,
            'IsPublic' => $this->isPublic,
            'IsAuthentized' => $this->isAuthentized,
            'ID_Permission' => $this->idPermission,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
