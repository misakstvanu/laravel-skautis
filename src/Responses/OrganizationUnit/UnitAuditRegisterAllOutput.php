<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitAuditRegisterAllOutput
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
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            idDocumentReport: isset($obj->{'ID_DocumentReport'}) ? (int) $obj->{'ID_DocumentReport'} : null,
            idPersonReport: isset($obj->{'ID_PersonReport'}) ? (int) $obj->{'ID_PersonReport'} : null,
            personReport: isset($obj->{'PersonReport'}) ? (string) $obj->{'PersonReport'} : null,
            reportDone: isset($obj->{'ReportDone'}) ? (string) $obj->{'ReportDone'} : null,
            reportText: isset($obj->{'ReportText'}) ? (string) $obj->{'ReportText'} : null,
            idDocumentAudit: isset($obj->{'ID_DocumentAudit'}) ? (int) $obj->{'ID_DocumentAudit'} : null,
            idPersonAudit: isset($obj->{'ID_PersonAudit'}) ? (int) $obj->{'ID_PersonAudit'} : null,
            personAudit: isset($obj->{'PersonAudit'}) ? (string) $obj->{'PersonAudit'} : null,
            auditDone: isset($obj->{'AuditDone'}) ? (string) $obj->{'AuditDone'} : null,
            auditText: isset($obj->{'AuditText'}) ? (string) $obj->{'AuditText'} : null,
        );
    }
}
