<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationReportChildOutput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $idMistake = null,
        public readonly ?string $displayName = null,
        public readonly ?string $mistake = null,
        public readonly ?bool $isUnit = null,
        public readonly ?int $objectId = null,
        public readonly ?string $idMistakeType = null,
        public readonly ?string $mistakeType = null,
        public readonly ?int $idReport = null,
        public readonly ?string $report = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $parentComment = null,
        public readonly ?bool $canComment = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idMistake: isset($obj->{'ID_Mistake'}) ? (int) $obj->{'ID_Mistake'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            mistake: isset($obj->{'Mistake'}) ? (string) $obj->{'Mistake'} : null,
            isUnit: isset($obj->{'IsUnit'}) ? (bool) $obj->{'IsUnit'} : null,
            objectId: isset($obj->{'ObjectId'}) ? (int) $obj->{'ObjectId'} : null,
            idMistakeType: isset($obj->{'ID_MistakeType'}) ? (string) $obj->{'ID_MistakeType'} : null,
            mistakeType: isset($obj->{'MistakeType'}) ? (string) $obj->{'MistakeType'} : null,
            idReport: isset($obj->{'ID_Report'}) ? (int) $obj->{'ID_Report'} : null,
            report: isset($obj->{'Report'}) ? (string) $obj->{'Report'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            parentComment: isset($obj->{'ParentComment'}) ? (string) $obj->{'ParentComment'} : null,
            canComment: isset($obj->{'CanComment'}) ? (bool) $obj->{'CanComment'} : null,
        );
    }
}
