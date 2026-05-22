<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantTypeTextAllInput
{
    public function __construct(
        public readonly ?string $idGrantType = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idGrantTypeTextCategory = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_GrantType' => $this->idGrantType,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_GrantTypeTextCategory' => $this->idGrantTypeTextCategory,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
