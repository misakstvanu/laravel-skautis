<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantAdvanceAllOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $idAdvancePeriod = null,
        public readonly ?string $advancePeriod = null,
        public readonly ?int $idEventEducationTerm = null,
        public readonly ?string $eventEducationTerm = null,
        public readonly ?int $termDays = null,
        public readonly ?float $amount = null,
        public readonly ?float $requestedAmount = null,
        public readonly ?string $paidDate = null,
        public readonly ?string $issueDate = null,
        public readonly ?string $insertedDate = null,
        public readonly ?string $note = null,
        public readonly ?int $year = null,
        public readonly ?string $idAdvanceState = null,
        public readonly ?string $advanceState = null,
        public readonly ?string $idGrantAdvanceType = null,
        public readonly ?string $grantAdvanceType = null,
        public readonly ?string $grantAdvanceTypeNote = null,
        public readonly ?string $key = null,
        public readonly ?int $idGrantProject = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            idAdvancePeriod: isset($obj->{'ID_AdvancePeriod'}) ? (string) $obj->{'ID_AdvancePeriod'} : null,
            advancePeriod: isset($obj->{'AdvancePeriod'}) ? (string) $obj->{'AdvancePeriod'} : null,
            idEventEducationTerm: isset($obj->{'ID_EventEducationTerm'}) ? (int) $obj->{'ID_EventEducationTerm'} : null,
            eventEducationTerm: isset($obj->{'EventEducationTerm'}) ? (string) $obj->{'EventEducationTerm'} : null,
            termDays: isset($obj->{'TermDays'}) ? (int) $obj->{'TermDays'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
            requestedAmount: isset($obj->{'RequestedAmount'}) ? (float) $obj->{'RequestedAmount'} : null,
            paidDate: isset($obj->{'PaidDate'}) ? (string) $obj->{'PaidDate'} : null,
            issueDate: isset($obj->{'IssueDate'}) ? (string) $obj->{'IssueDate'} : null,
            insertedDate: isset($obj->{'InsertedDate'}) ? (string) $obj->{'InsertedDate'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            idAdvanceState: isset($obj->{'ID_AdvanceState'}) ? (string) $obj->{'ID_AdvanceState'} : null,
            advanceState: isset($obj->{'AdvanceState'}) ? (string) $obj->{'AdvanceState'} : null,
            idGrantAdvanceType: isset($obj->{'ID_GrantAdvanceType'}) ? (string) $obj->{'ID_GrantAdvanceType'} : null,
            grantAdvanceType: isset($obj->{'GrantAdvanceType'}) ? (string) $obj->{'GrantAdvanceType'} : null,
            grantAdvanceTypeNote: isset($obj->{'GrantAdvanceTypeNote'}) ? (string) $obj->{'GrantAdvanceTypeNote'} : null,
            key: isset($obj->{'Key'}) ? (string) $obj->{'Key'} : null,
            idGrantProject: isset($obj->{'ID_GrantProject'}) ? (int) $obj->{'ID_GrantProject'} : null,
        );
    }
}
