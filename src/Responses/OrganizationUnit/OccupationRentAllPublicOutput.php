<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationRentAllPublicOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idOccupation = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?string $web = null,
        public readonly ?string $fotogallery = null,
        public readonly ?int $capacity = null,
        public readonly ?string $capacityNote = null,
        public readonly ?string $accommodationNote = null,
        public readonly ?bool $borrowableForeign = null,
        public readonly ?string $occupationRentPriceType = null,
        public readonly ?float $basePrice = null,
        public readonly ?float $scoutPrice = null,
        public readonly ?float $childPrice = null,
        public readonly ?string $priceNote = null,
        public readonly ?string $equipment = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idOccupation: isset($obj->{'ID_Occupation'}) ? (int) $obj->{'ID_Occupation'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            phone: isset($obj->{'Phone'}) ? (string) $obj->{'Phone'} : null,
            web: isset($obj->{'Web'}) ? (string) $obj->{'Web'} : null,
            fotogallery: isset($obj->{'Fotogallery'}) ? (string) $obj->{'Fotogallery'} : null,
            capacity: isset($obj->{'Capacity'}) ? (int) $obj->{'Capacity'} : null,
            capacityNote: isset($obj->{'CapacityNote'}) ? (string) $obj->{'CapacityNote'} : null,
            accommodationNote: isset($obj->{'AccommodationNote'}) ? (string) $obj->{'AccommodationNote'} : null,
            borrowableForeign: isset($obj->{'BorrowableForeign'}) ? (bool) $obj->{'BorrowableForeign'} : null,
            occupationRentPriceType: isset($obj->{'OccupationRentPriceType'}) ? (string) $obj->{'OccupationRentPriceType'} : null,
            basePrice: isset($obj->{'BasePrice'}) ? (float) $obj->{'BasePrice'} : null,
            scoutPrice: isset($obj->{'ScoutPrice'}) ? (float) $obj->{'ScoutPrice'} : null,
            childPrice: isset($obj->{'ChildPrice'}) ? (float) $obj->{'ChildPrice'} : null,
            priceNote: isset($obj->{'PriceNote'}) ? (string) $obj->{'PriceNote'} : null,
            equipment: isset($obj->{'Equipment'}) ? (string) $obj->{'Equipment'} : null,
        );
    }
}
