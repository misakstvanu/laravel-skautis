<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class StatementUpdateOpenInput
{
    public function __construct(
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'Year' => $this->year,
            'ID_StatementType' => $this->idStatementType,
            'StatementType' => $this->statementType,
            'IsError' => $this->isError,
            'IsDelivered' => $this->isDelivered,
            'DateDelivered' => $this->dateDelivered,
            'DateCreated' => $this->dateCreated,
            'IsThousands' => $this->isThousands,
            'IsConsultant' => $this->isConsultant,
            'ID_StatementState' => $this->idStatementState,
            'StatementState' => $this->statementState,
            'ID_Document' => $this->idDocument,
            'ID_DocumentTempFile' => $this->idDocumentTempFile,
            'DateSent' => $this->dateSent,
            'ID_PersonSent' => $this->idPersonSent,
            'PersonSent' => $this->personSent,
            'DateConfirmed' => $this->dateConfirmed,
            'ID_PersonConfirmed' => $this->idPersonConfirmed,
            'PersonConfirmed' => $this->personConfirmed,
            'ID_Registry' => $this->idRegistry,
            'ShowOverview' => $this->showOverview,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
