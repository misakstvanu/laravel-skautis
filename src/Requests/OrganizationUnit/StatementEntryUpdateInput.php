<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class StatementEntryUpdateInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?int $idStatement = null,
        public readonly ?int $idStatementEntryType = null,
        public readonly ?float $amount = null,
        public readonly ?float $amountLastYear = null,
        public readonly ?float $amountMain = null,
        public readonly ?float $amountEconomic = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'ID_Statement' => $this->idStatement,
            'ID_StatementEntryType' => $this->idStatementEntryType,
            'Amount' => $this->amount,
            'AmountLastYear' => $this->amountLastYear,
            'AmountMain' => $this->amountMain,
            'AmountEconomic' => $this->amountEconomic,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
