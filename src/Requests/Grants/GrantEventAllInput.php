<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantEventAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isEstimation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Grant' => $this->idGrant,
            'DisplayName' => $this->displayName,
            'IsEstimation' => $this->isEstimation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
