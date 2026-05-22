<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CampOnlineLoginDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?float $price = null,
        public readonly ?string $variableSymbol = null,
        public readonly ?string $specificSymbol = null,
        public readonly ?string $paymentNote = null,
        public readonly ?string $text = null,
        public readonly ?bool $isEnabled = null,
        public readonly ?string $paymentTerm = null,
        public readonly ?int $idAccount = null,
        public readonly ?string $account = null,
        public readonly ?string $accountPrefix = null,
        public readonly ?string $accountNumber = null,
        public readonly ?int $idBank = null,
        public readonly ?string $bank = null,
        public readonly ?string $bankCode = null,
        public readonly ?string $loginDeadline = null,
        public readonly ?string $participationFrom = null,
        public readonly ?string $participationTo = null,
        public readonly ?string $displayName = null,
        public readonly ?string $variableSymbolFormat = null,
        public readonly ?string $defaultOrdinalNumber = null,
        public readonly ?string $variableSymbolFixedNumber = null,
        public readonly ?string $idPaymentType = null,
        public readonly ?string $paymentType = null,
        public readonly ?bool $isUsed = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventCamp' => $this->idEventCamp,
            'Price' => $this->price,
            'VariableSymbol' => $this->variableSymbol,
            'SpecificSymbol' => $this->specificSymbol,
            'PaymentNote' => $this->paymentNote,
            'Text' => $this->text,
            'IsEnabled' => $this->isEnabled,
            'PaymentTerm' => $this->paymentTerm,
            'ID_Account' => $this->idAccount,
            'Account' => $this->account,
            'AccountPrefix' => $this->accountPrefix,
            'AccountNumber' => $this->accountNumber,
            'ID_Bank' => $this->idBank,
            'Bank' => $this->bank,
            'BankCode' => $this->bankCode,
            'LoginDeadline' => $this->loginDeadline,
            'ParticipationFrom' => $this->participationFrom,
            'ParticipationTo' => $this->participationTo,
            'DisplayName' => $this->displayName,
            'VariableSymbolFormat' => $this->variableSymbolFormat,
            'DefaultOrdinalNumber' => $this->defaultOrdinalNumber,
            'VariableSymbolFixedNumber' => $this->variableSymbolFixedNumber,
            'ID_PaymentType' => $this->idPaymentType,
            'PaymentType' => $this->paymentType,
            'IsUsed' => $this->isUsed,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
