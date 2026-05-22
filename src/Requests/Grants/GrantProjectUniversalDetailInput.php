<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantProjectUniversalDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Grant' => $this->idGrant,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
