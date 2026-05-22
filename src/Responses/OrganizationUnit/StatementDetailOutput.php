<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class StatementDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $year = null,
        public readonly ?string $idStatementType = null,
        public readonly ?string $statementType = null,
        public readonly ?bool $isError = null,
        public readonly ?bool $isDelivered = null,
        public readonly ?string $dateDelivered = null,
        public readonly ?string $dateCreated = null,
        public readonly ?bool $isThousands = null,
        public readonly ?bool $isConsultant = null,
        public readonly ?string $idStatementState = null,
        public readonly ?string $statementState = null,
        public readonly ?int $idDocument = null,
        public readonly ?string $idDocumentTempFile = null,
        public readonly ?string $dateSent = null,
        public readonly ?int $idPersonSent = null,
        public readonly ?string $personSent = null,
        public readonly ?string $dateConfirmed = null,
        public readonly ?int $idPersonConfirmed = null,
        public readonly ?string $personConfirmed = null,
        public readonly ?int $idRegistry = null,
        public readonly ?bool $showOverview = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            idApplication: isset($obj->{'ID_Application'}) ? (string) $obj->{'ID_Application'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            idStatementType: isset($obj->{'ID_StatementType'}) ? (string) $obj->{'ID_StatementType'} : null,
            statementType: isset($obj->{'StatementType'}) ? (string) $obj->{'StatementType'} : null,
            isError: isset($obj->{'IsError'}) ? (bool) $obj->{'IsError'} : null,
            isDelivered: isset($obj->{'IsDelivered'}) ? (bool) $obj->{'IsDelivered'} : null,
            dateDelivered: isset($obj->{'DateDelivered'}) ? (string) $obj->{'DateDelivered'} : null,
            dateCreated: isset($obj->{'DateCreated'}) ? (string) $obj->{'DateCreated'} : null,
            isThousands: isset($obj->{'IsThousands'}) ? (bool) $obj->{'IsThousands'} : null,
            isConsultant: isset($obj->{'IsConsultant'}) ? (bool) $obj->{'IsConsultant'} : null,
            idStatementState: isset($obj->{'ID_StatementState'}) ? (string) $obj->{'ID_StatementState'} : null,
            statementState: isset($obj->{'StatementState'}) ? (string) $obj->{'StatementState'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
            idDocumentTempFile: isset($obj->{'ID_DocumentTempFile'}) ? (string) $obj->{'ID_DocumentTempFile'} : null,
            dateSent: isset($obj->{'DateSent'}) ? (string) $obj->{'DateSent'} : null,
            idPersonSent: isset($obj->{'ID_PersonSent'}) ? (int) $obj->{'ID_PersonSent'} : null,
            personSent: isset($obj->{'PersonSent'}) ? (string) $obj->{'PersonSent'} : null,
            dateConfirmed: isset($obj->{'DateConfirmed'}) ? (string) $obj->{'DateConfirmed'} : null,
            idPersonConfirmed: isset($obj->{'ID_PersonConfirmed'}) ? (int) $obj->{'ID_PersonConfirmed'} : null,
            personConfirmed: isset($obj->{'PersonConfirmed'}) ? (string) $obj->{'PersonConfirmed'} : null,
            idRegistry: isset($obj->{'ID_Registry'}) ? (int) $obj->{'ID_Registry'} : null,
            showOverview: isset($obj->{'ShowOverview'}) ? (bool) $obj->{'ShowOverview'} : null,
        );
    }
}
