<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class PluginAllInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $instanceKey = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $showAll = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'InstanceKey' => $this->instanceKey,
            'DisplayName' => $this->displayName,
            'ShowAll' => $this->showAll,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
