<?php

namespace Misakstvanu\LaravelSkautis\Requests\ApplicationManagement;

final class PackageUpdateSyncPermissionInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $note = null,
        public readonly ?bool $isActive = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'Note' => $this->note,
            'IsActive' => $this->isActive,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
