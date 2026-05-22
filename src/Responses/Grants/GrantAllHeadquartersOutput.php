<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantAllHeadquartersOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $code = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $grantType = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idGrantDecision = null,
        public readonly ?float $requestedAmount = null,
        public readonly ?float $confirmedAmount = null,
        public readonly ?float $realAmount = null,
        public readonly ?float $billedAmount = null,
        public readonly ?string $personDayAmountText = null,
        public readonly ?string $idGrantState = null,
        public readonly ?string $grantState = null,
        public readonly ?bool $isHeadquartersApproved = null,
        public readonly ?bool $isDecisionConfirmed = null,
        public readonly ?bool $isAdvanceSent = null,
        public readonly ?bool $isBillSubmitted = null,
        public readonly ?bool $isBillApproved = null,
        public readonly ?string $billDate = null,
        public readonly ?bool $isWaitingForHeadquarters = null,
        public readonly ?int $processDaysLeft = null,
        public readonly ?string $headquartersNote = null,
        public readonly ?bool $haveCommissionNote = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            idGrantType: isset($obj->{'ID_GrantType'}) ? (string) $obj->{'ID_GrantType'} : null,
            grantType: isset($obj->{'GrantType'}) ? (string) $obj->{'GrantType'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idGrantDecision: isset($obj->{'ID_GrantDecision'}) ? (int) $obj->{'ID_GrantDecision'} : null,
            requestedAmount: isset($obj->{'RequestedAmount'}) ? (float) $obj->{'RequestedAmount'} : null,
            confirmedAmount: isset($obj->{'ConfirmedAmount'}) ? (float) $obj->{'ConfirmedAmount'} : null,
            realAmount: isset($obj->{'RealAmount'}) ? (float) $obj->{'RealAmount'} : null,
            billedAmount: isset($obj->{'BilledAmount'}) ? (float) $obj->{'BilledAmount'} : null,
            personDayAmountText: isset($obj->{'PersonDayAmountText'}) ? (string) $obj->{'PersonDayAmountText'} : null,
            idGrantState: isset($obj->{'ID_GrantState'}) ? (string) $obj->{'ID_GrantState'} : null,
            grantState: isset($obj->{'GrantState'}) ? (string) $obj->{'GrantState'} : null,
            isHeadquartersApproved: isset($obj->{'IsHeadquartersApproved'}) ? (bool) $obj->{'IsHeadquartersApproved'} : null,
            isDecisionConfirmed: isset($obj->{'IsDecisionConfirmed'}) ? (bool) $obj->{'IsDecisionConfirmed'} : null,
            isAdvanceSent: isset($obj->{'IsAdvanceSent'}) ? (bool) $obj->{'IsAdvanceSent'} : null,
            isBillSubmitted: isset($obj->{'IsBillSubmitted'}) ? (bool) $obj->{'IsBillSubmitted'} : null,
            isBillApproved: isset($obj->{'IsBillApproved'}) ? (bool) $obj->{'IsBillApproved'} : null,
            billDate: isset($obj->{'BillDate'}) ? (string) $obj->{'BillDate'} : null,
            isWaitingForHeadquarters: isset($obj->{'IsWaitingForHeadquarters'}) ? (bool) $obj->{'IsWaitingForHeadquarters'} : null,
            processDaysLeft: isset($obj->{'ProcessDaysLeft'}) ? (int) $obj->{'ProcessDaysLeft'} : null,
            headquartersNote: isset($obj->{'HeadquartersNote'}) ? (string) $obj->{'HeadquartersNote'} : null,
            haveCommissionNote: isset($obj->{'HaveCommissionNote'}) ? (bool) $obj->{'HaveCommissionNote'} : null,
        );
    }
}
