<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonContactRequestDetailCodeInput
{
    public function __construct(
        public readonly ?string $code = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Code' => $this->code,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
