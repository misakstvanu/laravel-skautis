<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class StatementEntryAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idStatement = null,
        public readonly ?int $idStatementEntryType = null,
        public readonly ?string $statementEntryType = null,
        public readonly ?int $idStatementCategory = null,
        public readonly ?string $statementCategory = null,
        public readonly ?float $amount = null,
        public readonly ?float $amountLastYear = null,
        public readonly ?float $amountMain = null,
        public readonly ?float $amountEconomic = null,
        public readonly ?float $amountTotal = null,
        public readonly ?bool $isThousands = null,
        public readonly ?string $externalID = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idStatement: isset($obj->{'ID_Statement'}) ? (int) $obj->{'ID_Statement'} : null,
            idStatementEntryType: isset($obj->{'ID_StatementEntryType'}) ? (int) $obj->{'ID_StatementEntryType'} : null,
            statementEntryType: isset($obj->{'StatementEntryType'}) ? (string) $obj->{'StatementEntryType'} : null,
            idStatementCategory: isset($obj->{'ID_StatementCategory'}) ? (int) $obj->{'ID_StatementCategory'} : null,
            statementCategory: isset($obj->{'StatementCategory'}) ? (string) $obj->{'StatementCategory'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
            amountLastYear: isset($obj->{'AmountLastYear'}) ? (float) $obj->{'AmountLastYear'} : null,
            amountMain: isset($obj->{'AmountMain'}) ? (float) $obj->{'AmountMain'} : null,
            amountEconomic: isset($obj->{'AmountEconomic'}) ? (float) $obj->{'AmountEconomic'} : null,
            amountTotal: isset($obj->{'AmountTotal'}) ? (float) $obj->{'AmountTotal'} : null,
            isThousands: isset($obj->{'IsThousands'}) ? (bool) $obj->{'IsThousands'} : null,
            externalID: isset($obj->{'ExternalID'}) ? (string) $obj->{'ExternalID'} : null,
        );
    }
}
