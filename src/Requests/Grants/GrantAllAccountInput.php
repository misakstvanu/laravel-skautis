<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAllAccountInput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $idGrantState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Year' => $this->year,
            'ID_GrantType' => $this->idGrantType,
            'ID_GrantState' => $this->idGrantState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
