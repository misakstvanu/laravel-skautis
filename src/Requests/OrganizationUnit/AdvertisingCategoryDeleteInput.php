<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class AdvertisingCategoryDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
