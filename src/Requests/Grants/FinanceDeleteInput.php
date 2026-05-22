<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class FinanceDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $idFinanceType = null,
        public readonly ?string $financeType = null,
        public readonly ?string $financeTypeCustom = null,
        public readonly ?string $financeTypeDisplay = null,
        public readonly ?float $amount = null,
        public readonly ?float $amountReal = null,
        public readonly ?bool $isRevenue = null,
        public readonly ?bool $isRealAmount = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Grant' => $this->idGrant,
            'ID_FinanceType' => $this->idFinanceType,
            'FinanceType' => $this->financeType,
            'FinanceTypeCustom' => $this->financeTypeCustom,
            'FinanceTypeDisplay' => $this->financeTypeDisplay,
            'Amount' => $this->amount,
            'AmountReal' => $this->amountReal,
            'IsRevenue' => $this->isRevenue,
            'IsRealAmount' => $this->isRealAmount,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
