<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class StatementCategoryAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idStatementType = null,
        public readonly ?string $statementType = null,
        public readonly ?string $note = null,
        public readonly ?bool $hasTotals = null,
        public readonly ?int $order = null,
        public readonly ?bool $isMoney = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idStatementType: isset($obj->{'ID_StatementType'}) ? (string) $obj->{'ID_StatementType'} : null,
            statementType: isset($obj->{'StatementType'}) ? (string) $obj->{'StatementType'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            hasTotals: isset($obj->{'HasTotals'}) ? (bool) $obj->{'HasTotals'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            isMoney: isset($obj->{'IsMoney'}) ? (bool) $obj->{'IsMoney'} : null,
        );
    }
}
