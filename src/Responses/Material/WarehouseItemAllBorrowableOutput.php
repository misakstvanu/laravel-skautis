<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseItemAllBorrowableOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $photoExtension = null,
        public readonly ?string $city = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?string $unitWithRegistrationNumber = null,
        public readonly ?float $rentPrice = null,
        public readonly ?string $rentNote = null,
        public readonly ?bool $inStock = null,
        public readonly ?int $idDocument = null,
        public readonly ?int $idDocumentSmall = null,
        public readonly ?int $idDocumentBig = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            photoExtension: isset($obj->{'PhotoExtension'}) ? (string) $obj->{'PhotoExtension'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            unitWithRegistrationNumber: isset($obj->{'UnitWithRegistrationNumber'}) ? (string) $obj->{'UnitWithRegistrationNumber'} : null,
            rentPrice: isset($obj->{'RentPrice'}) ? (float) $obj->{'RentPrice'} : null,
            rentNote: isset($obj->{'RentNote'}) ? (string) $obj->{'RentNote'} : null,
            inStock: isset($obj->{'InStock'}) ? (bool) $obj->{'InStock'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
            idDocumentSmall: isset($obj->{'ID_DocumentSmall'}) ? (int) $obj->{'ID_DocumentSmall'} : null,
            idDocumentBig: isset($obj->{'ID_DocumentBig'}) ? (int) $obj->{'ID_DocumentBig'} : null,
        );
    }
}
