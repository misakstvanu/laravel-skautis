<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class PluginUpdateInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isEnabled = null,
        public readonly ?string $description = null,
        public readonly ?string $instanceKey = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'IsEnabled' => $this->isEnabled,
            'Description' => $this->description,
            'InstanceKey' => $this->instanceKey,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
