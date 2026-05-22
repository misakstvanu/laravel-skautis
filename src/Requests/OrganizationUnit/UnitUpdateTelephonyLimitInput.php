<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitUpdateTelephonyLimitInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $telephonyLimit = null,
        public readonly ?int $dataLimit = null,
        public readonly ?int $defaultCallLimit = null,
        public readonly ?int $defaultDataLimit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'TelephonyLimit' => $this->telephonyLimit,
            'DataLimit' => $this->dataLimit,
            'DefaultCallLimit' => $this->defaultCallLimit,
            'DefaultDataLimit' => $this->defaultDataLimit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
