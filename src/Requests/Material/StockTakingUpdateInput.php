<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class StockTakingUpdateInput
{
    public function __construct(
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_StockTakingState' => $this->idStockTakingState,
            'StockTakingState' => $this->stockTakingState,
            'ID_StockTakingType' => $this->idStockTakingType,
            'StockTakingType' => $this->stockTakingType,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'Date' => $this->date,
            'Created' => $this->created,
            'ID_DocumentStockTaking' => $this->idDocumentStockTaking,
            'ID_DocumentProtocol' => $this->idDocumentProtocol,
            'ID_DocumentStockTakingTempFile' => $this->idDocumentStockTakingTempFile,
            'ID_DocumentProtocolTempFile' => $this->idDocumentProtocolTempFile,
            'Note' => $this->note,
            'DocumentStockTaking' => $this->documentStockTaking,
            'DocumentProtocol' => $this->documentProtocol,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'UnitFullName' => $this->unitFullName,
            'RegistrationNumber' => $this->registrationNumber,
            'Warehouses' => $this->warehouses,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
