<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllJubilantInput
{
    public function __construct(
        public readonly ?string $settings = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Settings' => $this->settings,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
