<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantProjectParticipationAllGrantInput
{
    public function __construct(
        public readonly ?int $idGrant = null,
        public readonly ?string $idGrantType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Grant' => $this->idGrant,
            'ID_GrantType' => $this->idGrantType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
