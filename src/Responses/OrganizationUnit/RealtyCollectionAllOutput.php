<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RealtyCollectionAllOutput
{
    public function __construct(
        public readonly ?string $photoExtension = null,
        public readonly ?string $fotogalleryUrl = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
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
        public readonly ?string $transportDescription = null,
        public readonly ?string $pointsOfInterest = null,
        public readonly ?string $note = null,
        public readonly ?bool $canRead = null,
        public readonly ?int $idDocument = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            photoExtension: isset($obj->{'PhotoExtension'}) ? (string) $obj->{'PhotoExtension'} : null,
            fotogalleryUrl: isset($obj->{'FotogalleryUrl'}) ? (string) $obj->{'FotogalleryUrl'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
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
            transportDescription: isset($obj->{'TransportDescription'}) ? (string) $obj->{'TransportDescription'} : null,
            pointsOfInterest: isset($obj->{'PointsOfInterest'}) ? (string) $obj->{'PointsOfInterest'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            canRead: isset($obj->{'CanRead'}) ? (bool) $obj->{'CanRead'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
        );
    }
}
