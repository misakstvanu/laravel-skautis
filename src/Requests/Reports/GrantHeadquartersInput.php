<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class GrantHeadquartersInput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?string $idGrantType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Year' => $this->year,
            'ID_GrantType' => $this->idGrantType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
