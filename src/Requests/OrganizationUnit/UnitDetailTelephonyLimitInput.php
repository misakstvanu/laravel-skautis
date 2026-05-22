<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitDetailTelephonyLimitInput
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
