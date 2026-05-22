<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class StatementDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvent = null,
        public readonly ?int $idGrant = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $event = null,
        public readonly ?bool $isEstimate = null,
        public readonly ?float $ammount = null,
        public readonly ?bool $isRevenue = null,
        public readonly ?string $idStatementType = null,
        public readonly ?string $statementType = null,
        public readonly ?string $statementTypeCustom = null,
        public readonly ?bool $isBudget = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $year = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?bool $isRevenueCustom = null,
        public readonly ?string $note = null,
        public readonly ?bool $showOverview = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Event' => $this->idEvent,
            'ID_Grant' => $this->idGrant,
            'ID_EventEducation' => $this->idEventEducation,
            'Event' => $this->event,
            'IsEstimate' => $this->isEstimate,
            'Ammount' => $this->ammount,
            'IsRevenue' => $this->isRevenue,
            'ID_StatementType' => $this->idStatementType,
            'StatementType' => $this->statementType,
            'StatementTypeCustom' => $this->statementTypeCustom,
            'IsBudget' => $this->isBudget,
            'ID_Unit' => $this->idUnit,
            'Year' => $this->year,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'IsRevenueCustom' => $this->isRevenueCustom,
            'Note' => $this->note,
            'ShowOverview' => $this->showOverview,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
