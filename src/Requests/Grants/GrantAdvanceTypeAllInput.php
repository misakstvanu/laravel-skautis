<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAdvanceTypeAllInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_GrantType' => $this->idGrantType,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
