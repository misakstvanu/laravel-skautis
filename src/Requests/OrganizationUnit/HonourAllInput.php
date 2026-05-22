<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class HonourAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID' => $this->id,
            'IsActive' => $this->isActive,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
