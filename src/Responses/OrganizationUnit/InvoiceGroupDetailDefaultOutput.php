<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class InvoiceGroupDetailDefaultOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isDefault = null,
        public readonly ?int $idTelephonyUnit = null,
        public readonly ?string $number = null,
        public readonly ?string $sequence = null,
        public readonly ?string $sequenceUnit = null,
        public readonly ?string $contractor = null,
        public readonly ?string $contractorAddress = null,
        public readonly ?string $contractorPhone = null,
        public readonly ?string $contractorFax = null,
        public readonly ?string $contractorEmail = null,
        public readonly ?string $contractorIC = null,
        public readonly ?string $contractorDIC = null,
        public readonly ?string $bankAccount = null,
        public readonly ?string $bankCode = null,
        public readonly ?bool $skautIsProcessed = null,
        public readonly ?string $fileReference = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isDefault: isset($obj->{'IsDefault'}) ? (bool) $obj->{'IsDefault'} : null,
            idTelephonyUnit: isset($obj->{'ID_TelephonyUnit'}) ? (int) $obj->{'ID_TelephonyUnit'} : null,
            number: isset($obj->{'Number'}) ? (string) $obj->{'Number'} : null,
            sequence: isset($obj->{'Sequence'}) ? (string) $obj->{'Sequence'} : null,
            sequenceUnit: isset($obj->{'SequenceUnit'}) ? (string) $obj->{'SequenceUnit'} : null,
            contractor: isset($obj->{'Contractor'}) ? (string) $obj->{'Contractor'} : null,
            contractorAddress: isset($obj->{'ContractorAddress'}) ? (string) $obj->{'ContractorAddress'} : null,
            contractorPhone: isset($obj->{'ContractorPhone'}) ? (string) $obj->{'ContractorPhone'} : null,
            contractorFax: isset($obj->{'ContractorFax'}) ? (string) $obj->{'ContractorFax'} : null,
            contractorEmail: isset($obj->{'ContractorEmail'}) ? (string) $obj->{'ContractorEmail'} : null,
            contractorIC: isset($obj->{'ContractorIC'}) ? (string) $obj->{'ContractorIC'} : null,
            contractorDIC: isset($obj->{'ContractorDIC'}) ? (string) $obj->{'ContractorDIC'} : null,
            bankAccount: isset($obj->{'BankAccount'}) ? (string) $obj->{'BankAccount'} : null,
            bankCode: isset($obj->{'BankCode'}) ? (string) $obj->{'BankCode'} : null,
            skautIsProcessed: isset($obj->{'SkautIsProcessed'}) ? (bool) $obj->{'SkautIsProcessed'} : null,
            fileReference: isset($obj->{'FileReference'}) ? (string) $obj->{'FileReference'} : null,
        );
    }
}
