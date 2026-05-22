<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class FunctionDetailOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $idFunctionReason = null,
        public readonly ?string $functionReason = null,
        public readonly ?bool $isDefaultRole = null,
        public readonly ?string $specification = null,
        public readonly ?int $idUser = null,
        public readonly ?bool $isUsed = null,
        public readonly ?string $agreementExtension = null,
        public readonly ?string $agreementConfirmed = null,
        public readonly ?bool $agreementNeeded = null,
        public readonly ?bool $agreementCanUpload = null,
        public readonly ?bool $agreementCanConfirm = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            idFunctionReason: isset($obj->{'ID_FunctionReason'}) ? (string) $obj->{'ID_FunctionReason'} : null,
            functionReason: isset($obj->{'FunctionReason'}) ? (string) $obj->{'FunctionReason'} : null,
            isDefaultRole: isset($obj->{'IsDefaultRole'}) ? (bool) $obj->{'IsDefaultRole'} : null,
            specification: isset($obj->{'Specification'}) ? (string) $obj->{'Specification'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            isUsed: isset($obj->{'IsUsed'}) ? (bool) $obj->{'IsUsed'} : null,
            agreementExtension: isset($obj->{'AgreementExtension'}) ? (string) $obj->{'AgreementExtension'} : null,
            agreementConfirmed: isset($obj->{'AgreementConfirmed'}) ? (string) $obj->{'AgreementConfirmed'} : null,
            agreementNeeded: isset($obj->{'AgreementNeeded'}) ? (bool) $obj->{'AgreementNeeded'} : null,
            agreementCanUpload: isset($obj->{'AgreementCanUpload'}) ? (bool) $obj->{'AgreementCanUpload'} : null,
            agreementCanConfirm: isset($obj->{'AgreementCanConfirm'}) ? (bool) $obj->{'AgreementCanConfirm'} : null,
        );
    }
}
