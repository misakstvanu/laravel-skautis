<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CampOnlineLoginDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventCamp: isset($obj->{'ID_EventCamp'}) ? (int) $obj->{'ID_EventCamp'} : null,
            price: isset($obj->{'Price'}) ? (float) $obj->{'Price'} : null,
            variableSymbol: isset($obj->{'VariableSymbol'}) ? (string) $obj->{'VariableSymbol'} : null,
            specificSymbol: isset($obj->{'SpecificSymbol'}) ? (string) $obj->{'SpecificSymbol'} : null,
            paymentNote: isset($obj->{'PaymentNote'}) ? (string) $obj->{'PaymentNote'} : null,
            text: isset($obj->{'Text'}) ? (string) $obj->{'Text'} : null,
            isEnabled: isset($obj->{'IsEnabled'}) ? (bool) $obj->{'IsEnabled'} : null,
            paymentTerm: isset($obj->{'PaymentTerm'}) ? (string) $obj->{'PaymentTerm'} : null,
            idAccount: isset($obj->{'ID_Account'}) ? (int) $obj->{'ID_Account'} : null,
            account: isset($obj->{'Account'}) ? (string) $obj->{'Account'} : null,
            accountPrefix: isset($obj->{'AccountPrefix'}) ? (string) $obj->{'AccountPrefix'} : null,
            accountNumber: isset($obj->{'AccountNumber'}) ? (string) $obj->{'AccountNumber'} : null,
            idBank: isset($obj->{'ID_Bank'}) ? (int) $obj->{'ID_Bank'} : null,
            bank: isset($obj->{'Bank'}) ? (string) $obj->{'Bank'} : null,
            bankCode: isset($obj->{'BankCode'}) ? (string) $obj->{'BankCode'} : null,
            loginDeadline: isset($obj->{'LoginDeadline'}) ? (string) $obj->{'LoginDeadline'} : null,
            participationFrom: isset($obj->{'ParticipationFrom'}) ? (string) $obj->{'ParticipationFrom'} : null,
            participationTo: isset($obj->{'ParticipationTo'}) ? (string) $obj->{'ParticipationTo'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            variableSymbolFormat: isset($obj->{'VariableSymbolFormat'}) ? (string) $obj->{'VariableSymbolFormat'} : null,
            defaultOrdinalNumber: isset($obj->{'DefaultOrdinalNumber'}) ? (string) $obj->{'DefaultOrdinalNumber'} : null,
            variableSymbolFixedNumber: isset($obj->{'VariableSymbolFixedNumber'}) ? (string) $obj->{'VariableSymbolFixedNumber'} : null,
            idPaymentType: isset($obj->{'ID_PaymentType'}) ? (string) $obj->{'ID_PaymentType'} : null,
            paymentType: isset($obj->{'PaymentType'}) ? (string) $obj->{'PaymentType'} : null,
            isUsed: isset($obj->{'IsUsed'}) ? (bool) $obj->{'IsUsed'} : null,
        );
    }
}
