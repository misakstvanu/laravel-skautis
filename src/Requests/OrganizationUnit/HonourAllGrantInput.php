<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class HonourAllGrantInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?int $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
