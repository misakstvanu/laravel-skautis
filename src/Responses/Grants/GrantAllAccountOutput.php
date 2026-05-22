<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantAllAccountOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGrantState: isset($obj->{'ID_GrantState'}) ? (string) $obj->{'ID_GrantState'} : null,
            grantState: isset($obj->{'GrantState'}) ? (string) $obj->{'GrantState'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idGrantType: isset($obj->{'ID_GrantType'}) ? (string) $obj->{'ID_GrantType'} : null,
            grantType: isset($obj->{'GrantType'}) ? (string) $obj->{'GrantType'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
            amountMaxReal: isset($obj->{'AmountMaxReal'}) ? (float) $obj->{'AmountMaxReal'} : null,
            costs: isset($obj->{'Costs'}) ? (float) $obj->{'Costs'} : null,
            amountRealRatio: isset($obj->{'AmountRealRatio'}) ? (float) $obj->{'AmountRealRatio'} : null,
            grantAdvanceAmount: isset($obj->{'GrantAdvanceAmount'}) ? (float) $obj->{'GrantAdvanceAmount'} : null,
            amountReal: isset($obj->{'AmountReal'}) ? (float) $obj->{'AmountReal'} : null,
            grantAdvanceRemainingPay: isset($obj->{'GrantAdvanceRemainingPay'}) ? (float) $obj->{'GrantAdvanceRemainingPay'} : null,
            grantAdvanceSupplement: isset($obj->{'GrantAdvanceSupplement'}) ? (float) $obj->{'GrantAdvanceSupplement'} : null,
            grantAdvanceSupplementDate: isset($obj->{'GrantAdvanceSupplementDate'}) ? (string) $obj->{'GrantAdvanceSupplementDate'} : null,
            grantAdvanceSupplementMoney: isset($obj->{'GrantAdvanceSupplementMoney'}) ? (string) $obj->{'GrantAdvanceSupplementMoney'} : null,
            grantAdvanceState: isset($obj->{'GrantAdvanceState'}) ? (string) $obj->{'GrantAdvanceState'} : null,
            grantAdvanceNote: isset($obj->{'GrantAdvanceNote'}) ? (string) $obj->{'GrantAdvanceNote'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (string) $obj->{'ID_EventEducation'} : null,
            amountRealDate: isset($obj->{'AmountRealDate'}) ? (string) $obj->{'AmountRealDate'} : null,
            grantAdvanceAmountTotal: isset($obj->{'GrantAdvanceAmountTotal'}) ? (float) $obj->{'GrantAdvanceAmountTotal'} : null,
            hasGrantAdvanceAmount: isset($obj->{'HasGrantAdvanceAmount'}) ? (bool) $obj->{'HasGrantAdvanceAmount'} : null,
        );
    }
}
