<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RealtyInsertRealtyCollectionInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?int $idRealtyCollection = null,
        public readonly ?string $idOwnerType = null,
        public readonly ?string $ownerTypeNote = null,
        public readonly ?bool $isPower = null,
        public readonly ?string $description = null,
        public readonly ?string $note = null,
        public readonly ?string $idRegisterType = null,
        public readonly ?string $registerCode = null,
        public readonly ?string $idTempFilePhoto = null,
        public readonly ?string $fotogalleryUrl = null,
        public readonly ?string $parcelNumber = null,
        public readonly ?string $registerCity = null,
        public readonly ?string $cadastralArea = null,
        public readonly ?int $lVNumber = null,
        public readonly ?int $acreage = null,
        public readonly ?string $parcelType = null,
        public readonly ?string $landType = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
        public readonly ?float $realtyGpsLatitude = null,
        public readonly ?float $realtyGpsLongitude = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_RealtyCollection' => $this->idRealtyCollection,
            'ID_OwnerType' => $this->idOwnerType,
            'OwnerTypeNote' => $this->ownerTypeNote,
            'IsPower' => $this->isPower,
            'Description' => $this->description,
            'Note' => $this->note,
            'ID_RegisterType' => $this->idRegisterType,
            'RegisterCode' => $this->registerCode,
            'ID_TempFilePhoto' => $this->idTempFilePhoto,
            'FotogalleryUrl' => $this->fotogalleryUrl,
            'ParcelNumber' => $this->parcelNumber,
            'RegisterCity' => $this->registerCity,
            'CadastralArea' => $this->cadastralArea,
            'LVNumber' => $this->lVNumber,
            'Acreage' => $this->acreage,
            'ParcelType' => $this->parcelType,
            'LandType' => $this->landType,
            'GpsLatitude' => $this->gpsLatitude,
            'GpsLongitude' => $this->gpsLongitude,
            'RealtyGpsLatitude' => $this->realtyGpsLatitude,
            'RealtyGpsLongitude' => $this->realtyGpsLongitude,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
