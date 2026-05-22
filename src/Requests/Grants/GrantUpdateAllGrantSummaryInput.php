<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantUpdateAllGrantSummaryInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $code = null,
        public readonly ?string $grantState = null,
        public readonly ?string $idGrantState = null,
        public readonly ?int $projectsCount = null,
        public readonly ?int $participantsCount = null,
        public readonly ?float $costs = null,
        public readonly ?float $grantUsed = null,
        public readonly ?float $amount = null,
        public readonly ?float $realAmount = null,
        public readonly ?string $approvedDate = null,
        public readonly ?float $grantCostRatio = null,
        public readonly ?string $condition = null,
        public readonly ?string $note = null,
        public readonly ?string $headquartersNote = null,
        public readonly ?float $maximumCostsRatio = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'Code' => $this->code,
            'GrantState' => $this->grantState,
            'ID_GrantState' => $this->idGrantState,
            'ProjectsCount' => $this->projectsCount,
            'ParticipantsCount' => $this->participantsCount,
            'Costs' => $this->costs,
            'GrantUsed' => $this->grantUsed,
            'Amount' => $this->amount,
            'RealAmount' => $this->realAmount,
            'ApprovedDate' => $this->approvedDate,
            'GrantCostRatio' => $this->grantCostRatio,
            'Condition' => $this->condition,
            'Note' => $this->note,
            'HeadquartersNote' => $this->headquartersNote,
            'MaximumCostsRatio' => $this->maximumCostsRatio,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
