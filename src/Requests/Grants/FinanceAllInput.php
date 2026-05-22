<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class FinanceAllInput
{
    public function __construct(
        public readonly ?int $idGrant = null,
        public readonly ?int $id = null,
        public readonly ?string $idFinanceType = null,
        public readonly ?bool $isRevenue = null,
        public readonly ?bool $isReal = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Grant' => $this->idGrant,
            'ID' => $this->id,
            'ID_FinanceType' => $this->idFinanceType,
            'IsRevenue' => $this->isRevenue,
            'IsReal' => $this->isReal,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
