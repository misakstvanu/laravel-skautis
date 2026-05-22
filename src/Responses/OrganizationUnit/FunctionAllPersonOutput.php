<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class FunctionAllPersonOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $idFunctionReason = null,
        public readonly ?string $functionReason = null,
        public readonly ?bool $permissionRUM = null,
        public readonly ?int $idAgency = null,
        public readonly ?string $agency = null,
        public readonly ?string $agreementExtension = null,
        public readonly ?string $agreementConfirmed = null,
        public readonly ?bool $agreementNeeded = null,
        public readonly ?bool $agreementCanUpload = null,
        public readonly ?bool $agreementCanConfirm = null,
        public readonly ?bool $agreementCanView = null,
        public readonly ?bool $agreementCanDownload = null,
        public readonly ?bool $isStatutory = null,
        public readonly ?bool $isJournalAttachmentFree = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            idFunctionReason: isset($obj->{'ID_FunctionReason'}) ? (string) $obj->{'ID_FunctionReason'} : null,
            functionReason: isset($obj->{'FunctionReason'}) ? (string) $obj->{'FunctionReason'} : null,
            permissionRUM: isset($obj->{'PermissionRUM'}) ? (bool) $obj->{'PermissionRUM'} : null,
            idAgency: isset($obj->{'ID_Agency'}) ? (int) $obj->{'ID_Agency'} : null,
            agency: isset($obj->{'Agency'}) ? (string) $obj->{'Agency'} : null,
            agreementExtension: isset($obj->{'AgreementExtension'}) ? (string) $obj->{'AgreementExtension'} : null,
            agreementConfirmed: isset($obj->{'AgreementConfirmed'}) ? (string) $obj->{'AgreementConfirmed'} : null,
            agreementNeeded: isset($obj->{'AgreementNeeded'}) ? (bool) $obj->{'AgreementNeeded'} : null,
            agreementCanUpload: isset($obj->{'AgreementCanUpload'}) ? (bool) $obj->{'AgreementCanUpload'} : null,
            agreementCanConfirm: isset($obj->{'AgreementCanConfirm'}) ? (bool) $obj->{'AgreementCanConfirm'} : null,
            agreementCanView: isset($obj->{'AgreementCanView'}) ? (bool) $obj->{'AgreementCanView'} : null,
            agreementCanDownload: isset($obj->{'AgreementCanDownload'}) ? (bool) $obj->{'AgreementCanDownload'} : null,
            isStatutory: isset($obj->{'IsStatutory'}) ? (bool) $obj->{'IsStatutory'} : null,
            isJournalAttachmentFree: isset($obj->{'IsJournalAttachmentFree'}) ? (bool) $obj->{'IsJournalAttachmentFree'} : null,
        );
    }
}
