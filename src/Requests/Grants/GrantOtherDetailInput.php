<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantOtherDetailInput
{
    public function __construct(
        public readonly ?int $idGrant = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Grant' => $this->idGrant,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
