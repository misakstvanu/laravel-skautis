<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantProjectParticipationAllInput
{
    public function __construct(
        public readonly ?int $idGrantProject = null,
        public readonly ?string $idGrantType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_GrantProject' => $this->idGrantProject,
            'ID_GrantType' => $this->idGrantType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
