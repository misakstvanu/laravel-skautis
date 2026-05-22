<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class StatementAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $year = null,
        public readonly ?string $idStatementType = null,
        public readonly ?string $statementType = null,
        public readonly ?bool $isError = null,
        public readonly ?bool $isDelivered = null,
        public readonly ?string $dateDelivered = null,
        public readonly ?bool $isThousands = null,
        public readonly ?bool $isConsultant = null,
        public readonly ?string $dateConfirmed = null,
        public readonly ?string $dateSent = null,
        public readonly ?string $idStatementState = null,
        public readonly ?string $statementState = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            idStatementType: isset($obj->{'ID_StatementType'}) ? (string) $obj->{'ID_StatementType'} : null,
            statementType: isset($obj->{'StatementType'}) ? (string) $obj->{'StatementType'} : null,
            isError: isset($obj->{'IsError'}) ? (bool) $obj->{'IsError'} : null,
            isDelivered: isset($obj->{'IsDelivered'}) ? (bool) $obj->{'IsDelivered'} : null,
            dateDelivered: isset($obj->{'DateDelivered'}) ? (string) $obj->{'DateDelivered'} : null,
            isThousands: isset($obj->{'IsThousands'}) ? (bool) $obj->{'IsThousands'} : null,
            isConsultant: isset($obj->{'IsConsultant'}) ? (bool) $obj->{'IsConsultant'} : null,
            dateConfirmed: isset($obj->{'DateConfirmed'}) ? (string) $obj->{'DateConfirmed'} : null,
            dateSent: isset($obj->{'DateSent'}) ? (string) $obj->{'DateSent'} : null,
            idStatementState: isset($obj->{'ID_StatementState'}) ? (string) $obj->{'ID_StatementState'} : null,
            statementState: isset($obj->{'StatementState'}) ? (string) $obj->{'StatementState'} : null,
        );
    }
}
