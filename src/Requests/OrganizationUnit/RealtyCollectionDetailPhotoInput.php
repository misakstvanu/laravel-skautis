<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RealtyCollectionDetailPhotoInput
{
    public function __construct(
        public readonly ?string $photoExtension = null,
        public readonly ?string $photoFileContent = null,
        public readonly ?string $idTempFilePhoto = null,
        public readonly ?string $fotogalleryUrl = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?string $owner = null,
        public readonly ?int $idUser = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $displayName = null,
        public readonly ?string $description = null,
        public readonly ?string $web = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
        public readonly ?bool $hasAddress = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $district = null,
        public readonly ?string $string = null,
        public readonly ?string $transportationMethodsText = null,
        public readonly ?string $transportDescription = null,
        public readonly ?string $locationsText = null,
        public readonly ?string $pointsOfInterest = null,
        public readonly ?string $note = null,
        public readonly ?int $idRegion = null,
        public readonly ?string $region = null,
        public readonly ?int $idDocument = null,
        public readonly ?string $storage = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'PhotoExtension' => $this->photoExtension,
            'PhotoFileContent' => $this->photoFileContent,
            'ID_TempFilePhoto' => $this->idTempFilePhoto,
            'FotogalleryUrl' => $this->fotogalleryUrl,
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'UnitRegistrationNumber' => $this->unitRegistrationNumber,
            'Owner' => $this->owner,
            'ID_User' => $this->idUser,
            'IsActive' => $this->isActive,
            'DisplayName' => $this->displayName,
            'Description' => $this->description,
            'Web' => $this->web,
            'GpsLatitude' => $this->gpsLatitude,
            'GpsLongitude' => $this->gpsLongitude,
            'HasAddress' => $this->hasAddress,
            'Street' => $this->street,
            'City' => $this->city,
            'Postcode' => $this->postcode,
            'District' => $this->district,
            'string' => $this->string,
            'TransportationMethodsText' => $this->transportationMethodsText,
            'TransportDescription' => $this->transportDescription,
            'LocationsText' => $this->locationsText,
            'PointsOfInterest' => $this->pointsOfInterest,
            'Note' => $this->note,
            'ID_Region' => $this->idRegion,
            'Region' => $this->region,
            'ID_Document' => $this->idDocument,
            'Storage' => $this->storage,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
