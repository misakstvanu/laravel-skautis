<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class UnitRegistrationPersonsInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $includeChild = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'IncludeChild' => $this->includeChild,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
