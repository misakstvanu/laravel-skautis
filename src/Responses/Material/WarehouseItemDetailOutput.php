<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseItemDetailOutput
{
    public function __construct(
        public readonly ?string $lastInventoryingDate = null,
        public readonly ?string $lastInventoryingPersonName = null,
        public readonly ?string $lastInventoryingInfo = null,
        public readonly ?bool $isInWarehouse = null,
        public readonly ?string $isInWarehouseStartDate = null,
        public readonly ?string $isInWarehouseNote = null,
        public readonly ?string $warehouseName = null,
        public readonly ?string $warehouseUnitRegistrationNumber = null,
        public readonly ?string $allTagsInText = null,
        public readonly ?string $photoExtension = null,
        public readonly ?int $idDocumentSmall = null,
        public readonly ?int $idDocumentBig = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            lastInventoryingDate: isset($obj->{'LastInventoryingDate'}) ? (string) $obj->{'LastInventoryingDate'} : null,
            lastInventoryingPersonName: isset($obj->{'LastInventoryingPersonName'}) ? (string) $obj->{'LastInventoryingPersonName'} : null,
            lastInventoryingInfo: isset($obj->{'LastInventoryingInfo'}) ? (string) $obj->{'LastInventoryingInfo'} : null,
            isInWarehouse: isset($obj->{'IsInWarehouse'}) ? (bool) $obj->{'IsInWarehouse'} : null,
            isInWarehouseStartDate: isset($obj->{'IsInWarehouseStartDate'}) ? (string) $obj->{'IsInWarehouseStartDate'} : null,
            isInWarehouseNote: isset($obj->{'IsInWarehouseNote'}) ? (string) $obj->{'IsInWarehouseNote'} : null,
            warehouseName: isset($obj->{'WarehouseName'}) ? (string) $obj->{'WarehouseName'} : null,
            warehouseUnitRegistrationNumber: isset($obj->{'WarehouseUnitRegistrationNumber'}) ? (string) $obj->{'WarehouseUnitRegistrationNumber'} : null,
            allTagsInText: isset($obj->{'AllTagsInText'}) ? (string) $obj->{'AllTagsInText'} : null,
            photoExtension: isset($obj->{'PhotoExtension'}) ? (string) $obj->{'PhotoExtension'} : null,
            idDocumentSmall: isset($obj->{'ID_DocumentSmall'}) ? (int) $obj->{'ID_DocumentSmall'} : null,
            idDocumentBig: isset($obj->{'ID_DocumentBig'}) ? (int) $obj->{'ID_DocumentBig'} : null,
        );
    }
}
