<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class AgeCategoryAllInput
{
    public function __construct(
        public readonly ?bool $isMore = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'IsMore' => $this->isMore,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
