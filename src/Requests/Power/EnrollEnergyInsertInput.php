<?php

namespace Misakstvanu\LaravelSkautis\Requests\Power;

final class EnrollEnergyInsertInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $accessKey = null,
        public readonly ?int $id = null,
        public readonly ?string $note = null,
        public readonly ?string $idEnrollEnergyType = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $birthday = null,
        public readonly ?string $identificationCode = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unitName = null,
        public readonly ?string $company = null,
        public readonly ?string $iC = null,
        public readonly ?string $dIC = null,
        public readonly ?string $agent = null,
        public readonly ?string $function_ = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $energySupplier1 = null,
        public readonly ?string $energySupplier2 = null,
        public readonly ?string $phone = null,
        public readonly ?string $email = null,
        public readonly ?string $idTempfileAgreement = null,
        public readonly ?string $idTempFileAccount = null,
        public readonly ?string $idTempFileOther = null,
        public readonly ?bool $onlyValidate = null,
        public readonly ?string $idAdvanceType = null,
        public readonly ?string $advanceTypeContent = null,
        public readonly ?float $advanceAmount = null,
        public readonly ?string $contractTerminationDate = null,
        public readonly ?string $idContractTerminationType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'AccessKey' => $this->accessKey,
            'ID' => $this->id,
            'Note' => $this->note,
            'ID_EnrollEnergyType' => $this->idEnrollEnergyType,
            'ID_Person' => $this->idPerson,
            'FirstName' => $this->firstName,
            'LastName' => $this->lastName,
            'Birthday' => $this->birthday,
            'IdentificationCode' => $this->identificationCode,
            'ID_Unit' => $this->idUnit,
            'UnitName' => $this->unitName,
            'Company' => $this->company,
            'IC' => $this->iC,
            'DIC' => $this->dIC,
            'Agent' => $this->agent,
            'Function' => $this->function_,
            'Street' => $this->street,
            'City' => $this->city,
            'Postcode' => $this->postcode,
            'EnergySupplier1' => $this->energySupplier1,
            'EnergySupplier2' => $this->energySupplier2,
            'Phone' => $this->phone,
            'Email' => $this->email,
            'ID_TempfileAgreement' => $this->idTempfileAgreement,
            'ID_TempFileAccount' => $this->idTempFileAccount,
            'ID_TempFileOther' => $this->idTempFileOther,
            'OnlyValidate' => $this->onlyValidate,
            'ID_AdvanceType' => $this->idAdvanceType,
            'AdvanceTypeContent' => $this->advanceTypeContent,
            'AdvanceAmount' => $this->advanceAmount,
            'ContractTerminationDate' => $this->contractTerminationDate,
            'ID_ContractTerminationType' => $this->idContractTerminationType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
