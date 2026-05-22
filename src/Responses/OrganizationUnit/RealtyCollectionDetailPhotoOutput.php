<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RealtyCollectionDetailPhotoOutput
{
    public function __construct(
        public readonly ?string $photoExtension = null,
        public readonly ?string $photoFileContent = null,
        public readonly ?string $idTempFilePhoto = null,
        public readonly ?string $fotogalleryUrl = null,
        public readonly ?string $idLogin = null,
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            photoExtension: isset($obj->{'PhotoExtension'}) ? (string) $obj->{'PhotoExtension'} : null,
            photoFileContent: isset($obj->{'PhotoFileContent'}) ? (string) $obj->{'PhotoFileContent'} : null,
            idTempFilePhoto: isset($obj->{'ID_TempFilePhoto'}) ? (string) $obj->{'ID_TempFilePhoto'} : null,
            fotogalleryUrl: isset($obj->{'FotogalleryUrl'}) ? (string) $obj->{'FotogalleryUrl'} : null,
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            owner: isset($obj->{'Owner'}) ? (string) $obj->{'Owner'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            web: isset($obj->{'Web'}) ? (string) $obj->{'Web'} : null,
            gpsLatitude: isset($obj->{'GpsLatitude'}) ? (float) $obj->{'GpsLatitude'} : null,
            gpsLongitude: isset($obj->{'GpsLongitude'}) ? (float) $obj->{'GpsLongitude'} : null,
            hasAddress: isset($obj->{'HasAddress'}) ? (bool) $obj->{'HasAddress'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            district: isset($obj->{'District'}) ? (string) $obj->{'District'} : null,
            string: isset($obj->{'string'}) ? (string) $obj->{'string'} : null,
            transportationMethodsText: isset($obj->{'TransportationMethodsText'}) ? (string) $obj->{'TransportationMethodsText'} : null,
            transportDescription: isset($obj->{'TransportDescription'}) ? (string) $obj->{'TransportDescription'} : null,
            locationsText: isset($obj->{'LocationsText'}) ? (string) $obj->{'LocationsText'} : null,
            pointsOfInterest: isset($obj->{'PointsOfInterest'}) ? (string) $obj->{'PointsOfInterest'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idRegion: isset($obj->{'ID_Region'}) ? (int) $obj->{'ID_Region'} : null,
            region: isset($obj->{'Region'}) ? (string) $obj->{'Region'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
            storage: isset($obj->{'Storage'}) ? (string) $obj->{'Storage'} : null,
        );
    }
}
