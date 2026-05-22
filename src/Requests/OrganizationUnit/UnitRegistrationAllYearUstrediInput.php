<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitRegistrationAllYearUstrediInput
{
    public function __construct(
        public readonly ?bool $exportFilter = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ExportFilter' => $this->exportFilter,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
