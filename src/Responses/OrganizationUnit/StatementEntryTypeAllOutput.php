<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class StatementEntryTypeAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idStatementCategory = null,
        public readonly ?string $statementCategory = null,
        public readonly ?string $note = null,
        public readonly ?string $birdos = null,
        public readonly ?int $yearFrom = null,
        public readonly ?int $yearTo = null,
        public readonly ?bool $includeInTotal = null,
        public readonly ?int $order = null,
        public readonly ?string $key = null,
        public readonly ?string $externalID = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idStatementCategory: isset($obj->{'ID_StatementCategory'}) ? (int) $obj->{'ID_StatementCategory'} : null,
            statementCategory: isset($obj->{'StatementCategory'}) ? (string) $obj->{'StatementCategory'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            birdos: isset($obj->{'Birdos'}) ? (string) $obj->{'Birdos'} : null,
            yearFrom: isset($obj->{'YearFrom'}) ? (int) $obj->{'YearFrom'} : null,
            yearTo: isset($obj->{'YearTo'}) ? (int) $obj->{'YearTo'} : null,
            includeInTotal: isset($obj->{'IncludeInTotal'}) ? (bool) $obj->{'IncludeInTotal'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            key: isset($obj->{'Key'}) ? (string) $obj->{'Key'} : null,
            externalID: isset($obj->{'ExternalID'}) ? (string) $obj->{'ExternalID'} : null,
        );
    }
}
