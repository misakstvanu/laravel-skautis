<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class DomainStateAllInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
