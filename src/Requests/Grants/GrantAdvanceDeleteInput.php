<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAdvanceDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?int $idEventEducationTerm = null,
        public readonly ?string $eventEducationTerm = null,
        public readonly ?float $amount = null,
        public readonly ?string $paidDate = null,
        public readonly ?string $issueDate = null,
        public readonly ?string $idAdvancePeriod = null,
        public readonly ?string $advancePeriod = null,
        public readonly ?string $idAdvanceState = null,
        public readonly ?string $advanceState = null,
        public readonly ?string $insertedDate = null,
        public readonly ?int $year = null,
        public readonly ?string $note = null,
        public readonly ?float $requestedAmount = null,
        public readonly ?int $termDays = null,
        public readonly ?string $key = null,
        public readonly ?string $moneyNumber = null,
        public readonly ?int $idEvent = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $code = null,
        public readonly ?string $idGrantAdvanceType = null,
        public readonly ?string $grantAdvanceType = null,
        public readonly ?string $grantAdvanceTypeShort = null,
        public readonly ?string $grantAdvanceTypeNote = null,
        public readonly ?string $advanceStateShort = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $grantType = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idGrantProject = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Grant' => $this->idGrant,
            'ID_EventEducationTerm' => $this->idEventEducationTerm,
            'EventEducationTerm' => $this->eventEducationTerm,
            'Amount' => $this->amount,
            'PaidDate' => $this->paidDate,
            'IssueDate' => $this->issueDate,
            'ID_AdvancePeriod' => $this->idAdvancePeriod,
            'AdvancePeriod' => $this->advancePeriod,
            'ID_AdvanceState' => $this->idAdvanceState,
            'AdvanceState' => $this->advanceState,
            'InsertedDate' => $this->insertedDate,
            'Year' => $this->year,
            'Note' => $this->note,
            'RequestedAmount' => $this->requestedAmount,
            'TermDays' => $this->termDays,
            'Key' => $this->key,
            'MoneyNumber' => $this->moneyNumber,
            'ID_Event' => $this->idEvent,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'Code' => $this->code,
            'ID_GrantAdvanceType' => $this->idGrantAdvanceType,
            'GrantAdvanceType' => $this->grantAdvanceType,
            'GrantAdvanceTypeShort' => $this->grantAdvanceTypeShort,
            'GrantAdvanceTypeNote' => $this->grantAdvanceTypeNote,
            'AdvanceStateShort' => $this->advanceStateShort,
            'ID_GrantType' => $this->idGrantType,
            'GrantType' => $this->grantType,
            'DisplayName' => $this->displayName,
            'ID_GrantProject' => $this->idGrantProject,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
