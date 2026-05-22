<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class StatementAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isEstimate = null,
        public readonly ?float $ammount = null,
        public readonly ?bool $isRevenue = null,
        public readonly ?string $idStatementType = null,
        public readonly ?string $statementType = null,
        public readonly ?bool $isBudget = null,
        public readonly ?bool $isEditable = null,
        public readonly ?int $year = null,
        public readonly ?string $statementTypeCustom = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isEstimate: isset($obj->{'IsEstimate'}) ? (bool) $obj->{'IsEstimate'} : null,
            ammount: isset($obj->{'Ammount'}) ? (float) $obj->{'Ammount'} : null,
            isRevenue: isset($obj->{'IsRevenue'}) ? (bool) $obj->{'IsRevenue'} : null,
            idStatementType: isset($obj->{'ID_StatementType'}) ? (string) $obj->{'ID_StatementType'} : null,
            statementType: isset($obj->{'StatementType'}) ? (string) $obj->{'StatementType'} : null,
            isBudget: isset($obj->{'IsBudget'}) ? (bool) $obj->{'IsBudget'} : null,
            isEditable: isset($obj->{'IsEditable'}) ? (bool) $obj->{'IsEditable'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            statementTypeCustom: isset($obj->{'StatementTypeCustom'}) ? (string) $obj->{'StatementTypeCustom'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
