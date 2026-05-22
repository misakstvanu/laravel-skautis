<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class GrantOverviewInput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?string $person = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Year' => $this->year,
            'Person' => $this->person,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
