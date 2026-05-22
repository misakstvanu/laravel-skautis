<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class StatementEntryAllTotalsOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $statementEntryType = null,
        public readonly ?int $idStatementCategory = null,
        public readonly ?string $statementCategory = null,
        public readonly ?float $amount = null,
        public readonly ?float $amountLastYear = null,
        public readonly ?float $amountMain = null,
        public readonly ?float $amountEconomic = null,
        public readonly ?float $amountTotal = null,
        public readonly ?bool $isTotal = null,
        public readonly ?bool $includeInTotal = null,
        public readonly ?bool $isThousands = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            statementEntryType: isset($obj->{'StatementEntryType'}) ? (string) $obj->{'StatementEntryType'} : null,
            idStatementCategory: isset($obj->{'ID_StatementCategory'}) ? (int) $obj->{'ID_StatementCategory'} : null,
            statementCategory: isset($obj->{'StatementCategory'}) ? (string) $obj->{'StatementCategory'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
            amountLastYear: isset($obj->{'AmountLastYear'}) ? (float) $obj->{'AmountLastYear'} : null,
            amountMain: isset($obj->{'AmountMain'}) ? (float) $obj->{'AmountMain'} : null,
            amountEconomic: isset($obj->{'AmountEconomic'}) ? (float) $obj->{'AmountEconomic'} : null,
            amountTotal: isset($obj->{'AmountTotal'}) ? (float) $obj->{'AmountTotal'} : null,
            isTotal: isset($obj->{'IsTotal'}) ? (bool) $obj->{'IsTotal'} : null,
            includeInTotal: isset($obj->{'IncludeInTotal'}) ? (bool) $obj->{'IncludeInTotal'} : null,
            isThousands: isset($obj->{'IsThousands'}) ? (bool) $obj->{'IsThousands'} : null,
        );
    }
}
