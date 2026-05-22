<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantAllUnitSummaryOutput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?int $id = null,
        public readonly ?string $code = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $eventEducation = null,
        public readonly ?string $grantType = null,
        public readonly ?float $amount = null,
        public readonly ?string $idGrantState = null,
        public readonly ?string $grantState = null,
        public readonly ?int $idGrantDecision = null,
        public readonly ?bool $isHeadquartersApproved = null,
        public readonly ?bool $isDecisionConfirmed = null,
        public readonly ?bool $isAdvanceSent = null,
        public readonly ?bool $isBillSubmitted = null,
        public readonly ?bool $isBillApproved = null,
        public readonly ?bool $isUnitLeader = null,
        public readonly ?string $projectName = null,
        public readonly ?string $idGrantType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            eventEducation: isset($obj->{'EventEducation'}) ? (string) $obj->{'EventEducation'} : null,
            grantType: isset($obj->{'GrantType'}) ? (string) $obj->{'GrantType'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
            idGrantState: isset($obj->{'ID_GrantState'}) ? (string) $obj->{'ID_GrantState'} : null,
            grantState: isset($obj->{'GrantState'}) ? (string) $obj->{'GrantState'} : null,
            idGrantDecision: isset($obj->{'ID_GrantDecision'}) ? (int) $obj->{'ID_GrantDecision'} : null,
            isHeadquartersApproved: isset($obj->{'IsHeadquartersApproved'}) ? (bool) $obj->{'IsHeadquartersApproved'} : null,
            isDecisionConfirmed: isset($obj->{'IsDecisionConfirmed'}) ? (bool) $obj->{'IsDecisionConfirmed'} : null,
            isAdvanceSent: isset($obj->{'IsAdvanceSent'}) ? (bool) $obj->{'IsAdvanceSent'} : null,
            isBillSubmitted: isset($obj->{'IsBillSubmitted'}) ? (bool) $obj->{'IsBillSubmitted'} : null,
            isBillApproved: isset($obj->{'IsBillApproved'}) ? (bool) $obj->{'IsBillApproved'} : null,
            isUnitLeader: isset($obj->{'IsUnitLeader'}) ? (bool) $obj->{'IsUnitLeader'} : null,
            projectName: isset($obj->{'ProjectName'}) ? (string) $obj->{'ProjectName'} : null,
            idGrantType: isset($obj->{'ID_GrantType'}) ? (string) $obj->{'ID_GrantType'} : null,
        );
    }
}
