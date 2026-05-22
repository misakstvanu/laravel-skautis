<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class GrantAdvancePaymentListInput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?string $string = null,
        public readonly ?int $daysAhead = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Year' => $this->year,
            'string' => $this->string,
            'DaysAhead' => $this->daysAhead,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
