<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationRentPriceDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idOccupation = null,
        public readonly ?int $idOccupationRent = null,
        public readonly ?string $occupationRent = null,
        public readonly ?string $idOccupationRentPriceType = null,
        public readonly ?string $occupationRentPriceType = null,
        public readonly ?int $basePrice = null,
        public readonly ?string $priceNote = null,
        public readonly ?int $scoutPrice = null,
        public readonly ?int $childPrice = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idOccupation: isset($obj->{'ID_Occupation'}) ? (int) $obj->{'ID_Occupation'} : null,
            idOccupationRent: isset($obj->{'ID_OccupationRent'}) ? (int) $obj->{'ID_OccupationRent'} : null,
            occupationRent: isset($obj->{'OccupationRent'}) ? (string) $obj->{'OccupationRent'} : null,
            idOccupationRentPriceType: isset($obj->{'ID_OccupationRentPriceType'}) ? (string) $obj->{'ID_OccupationRentPriceType'} : null,
            occupationRentPriceType: isset($obj->{'OccupationRentPriceType'}) ? (string) $obj->{'OccupationRentPriceType'} : null,
            basePrice: isset($obj->{'BasePrice'}) ? (int) $obj->{'BasePrice'} : null,
            priceNote: isset($obj->{'PriceNote'}) ? (string) $obj->{'PriceNote'} : null,
            scoutPrice: isset($obj->{'ScoutPrice'}) ? (int) $obj->{'ScoutPrice'} : null,
            childPrice: isset($obj->{'ChildPrice'}) ? (int) $obj->{'ChildPrice'} : null,
        );
    }
}
