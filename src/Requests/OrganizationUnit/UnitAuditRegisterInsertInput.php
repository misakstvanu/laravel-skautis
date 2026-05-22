<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitAuditRegisterInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $year = null,
        public readonly ?int $idDocumentReport = null,
        public readonly ?int $idPersonReport = null,
        public readonly ?string $personReport = null,
        public readonly ?string $reportDone = null,
        public readonly ?string $reportText = null,
        public readonly ?int $idDocumentAudit = null,
        public readonly ?int $idPersonAudit = null,
        public readonly ?string $personAudit = null,
        public readonly ?string $auditDone = null,
        public readonly ?string $auditText = null,
        public readonly ?string $idTempFileReport = null,
        public readonly ?string $idTempFileAudit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'Year' => $this->year,
            'ID_DocumentReport' => $this->idDocumentReport,
            'ID_PersonReport' => $this->idPersonReport,
            'PersonReport' => $this->personReport,
            'ReportDone' => $this->reportDone,
            'ReportText' => $this->reportText,
            'ID_DocumentAudit' => $this->idDocumentAudit,
            'ID_PersonAudit' => $this->idPersonAudit,
            'PersonAudit' => $this->personAudit,
            'AuditDone' => $this->auditDone,
            'AuditText' => $this->auditText,
            'ID_TempFileReport' => $this->idTempFileReport,
            'ID_TempFileAudit' => $this->idTempFileAudit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
