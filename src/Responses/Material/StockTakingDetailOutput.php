<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class StockTakingDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $idStockTakingState = null,
        public readonly ?string $stockTakingState = null,
        public readonly ?string $idStockTakingType = null,
        public readonly ?string $stockTakingType = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $date = null,
        public readonly ?string $created = null,
        public readonly ?int $idDocumentStockTaking = null,
        public readonly ?int $idDocumentProtocol = null,
        public readonly ?string $idDocumentStockTakingTempFile = null,
        public readonly ?string $idDocumentProtocolTempFile = null,
        public readonly ?string $note = null,
        public readonly ?string $documentStockTaking = null,
        public readonly ?string $documentProtocol = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitFullName = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $warehouses = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idStockTakingState: isset($obj->{'ID_StockTakingState'}) ? (string) $obj->{'ID_StockTakingState'} : null,
            stockTakingState: isset($obj->{'StockTakingState'}) ? (string) $obj->{'StockTakingState'} : null,
            idStockTakingType: isset($obj->{'ID_StockTakingType'}) ? (string) $obj->{'ID_StockTakingType'} : null,
            stockTakingType: isset($obj->{'StockTakingType'}) ? (string) $obj->{'StockTakingType'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            created: isset($obj->{'Created'}) ? (string) $obj->{'Created'} : null,
            idDocumentStockTaking: isset($obj->{'ID_DocumentStockTaking'}) ? (int) $obj->{'ID_DocumentStockTaking'} : null,
            idDocumentProtocol: isset($obj->{'ID_DocumentProtocol'}) ? (int) $obj->{'ID_DocumentProtocol'} : null,
            idDocumentStockTakingTempFile: isset($obj->{'ID_DocumentStockTakingTempFile'}) ? (string) $obj->{'ID_DocumentStockTakingTempFile'} : null,
            idDocumentProtocolTempFile: isset($obj->{'ID_DocumentProtocolTempFile'}) ? (string) $obj->{'ID_DocumentProtocolTempFile'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            documentStockTaking: isset($obj->{'DocumentStockTaking'}) ? (string) $obj->{'DocumentStockTaking'} : null,
            documentProtocol: isset($obj->{'DocumentProtocol'}) ? (string) $obj->{'DocumentProtocol'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitFullName: isset($obj->{'UnitFullName'}) ? (string) $obj->{'UnitFullName'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            warehouses: isset($obj->{'Warehouses'}) ? (string) $obj->{'Warehouses'} : null,
        );
    }
}
