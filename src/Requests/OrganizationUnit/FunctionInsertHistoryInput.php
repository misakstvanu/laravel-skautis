<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class FunctionInsertHistoryInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $idFunctionReason = null,
        public readonly ?int $idRole = null,
        public readonly ?bool $isDeleteRole = null,
        public readonly ?string $specification = null,
        public readonly ?string $agreementExtension = null,
        public readonly ?string $agreementConfirmed = null,
        public readonly ?string $idTempFile = null,
        public readonly ?bool $agreementNeeded = null,
        public readonly ?bool $agreementCanUpload = null,
        public readonly ?bool $agreementCanConfirm = null,
        public readonly ?bool $agreementCanView = null,
        public readonly ?string $code = null,
        public readonly ?string $number = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            'ID_Person' => $this->idPerson,
            'ID_Unit' => $this->idUnit,
            'ID_FunctionType' => $this->idFunctionType,
            'ID_FunctionReason' => $this->idFunctionReason,
            'ID_Role' => $this->idRole,
            'IsDeleteRole' => $this->isDeleteRole,
            'Specification' => $this->specification,
            'AgreementExtension' => $this->agreementExtension,
            'AgreementConfirmed' => $this->agreementConfirmed,
            'ID_TempFile' => $this->idTempFile,
            'AgreementNeeded' => $this->agreementNeeded,
            'AgreementCanUpload' => $this->agreementCanUpload,
            'AgreementCanConfirm' => $this->agreementCanConfirm,
            'AgreementCanView' => $this->agreementCanView,
            'Code' => $this->code,
            'Number' => $this->number,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
