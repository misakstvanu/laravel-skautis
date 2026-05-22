<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantUpdateAccountInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idGrantState = null,
        public readonly ?string $grantState = null,
        public readonly ?string $code = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $grantType = null,
        public readonly ?float $amount = null,
        public readonly ?float $amountMaxReal = null,
        public readonly ?float $costs = null,
        public readonly ?float $amountRealRatio = null,
        public readonly ?float $grantAdvanceAmount = null,
        public readonly ?float $amountReal = null,
        public readonly ?float $grantAdvanceRemainingPay = null,
        public readonly ?float $grantAdvanceSupplement = null,
        public readonly ?string $grantAdvanceSupplementDate = null,
        public readonly ?string $grantAdvanceSupplementMoney = null,
        public readonly ?string $grantAdvanceState = null,
        public readonly ?string $grantAdvanceNote = null,
        public readonly ?string $idEventEducation = null,
        public readonly ?string $amountRealDate = null,
        public readonly ?float $grantAdvanceAmountTotal = null,
        public readonly ?bool $hasGrantAdvanceAmount = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_GrantState' => $this->idGrantState,
            'GrantState' => $this->grantState,
            'Code' => $this->code,
            'DisplayName' => $this->displayName,
            'ID_GrantType' => $this->idGrantType,
            'GrantType' => $this->grantType,
            'Amount' => $this->amount,
            'AmountMaxReal' => $this->amountMaxReal,
            'Costs' => $this->costs,
            'AmountRealRatio' => $this->amountRealRatio,
            'GrantAdvanceAmount' => $this->grantAdvanceAmount,
            'AmountReal' => $this->amountReal,
            'GrantAdvanceRemainingPay' => $this->grantAdvanceRemainingPay,
            'GrantAdvanceSupplement' => $this->grantAdvanceSupplement,
            'GrantAdvanceSupplementDate' => $this->grantAdvanceSupplementDate,
            'GrantAdvanceSupplementMoney' => $this->grantAdvanceSupplementMoney,
            'GrantAdvanceState' => $this->grantAdvanceState,
            'GrantAdvanceNote' => $this->grantAdvanceNote,
            'ID_EventEducation' => $this->idEventEducation,
            'AmountRealDate' => $this->amountRealDate,
            'GrantAdvanceAmountTotal' => $this->grantAdvanceAmountTotal,
            'HasGrantAdvanceAmount' => $this->hasGrantAdvanceAmount,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
