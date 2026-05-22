<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonUpdateTelephonyLimitInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $telephonyLimit = null,
        public readonly ?int $dataLimit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'TelephonyLimit' => $this->telephonyLimit,
            'DataLimit' => $this->dataLimit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
