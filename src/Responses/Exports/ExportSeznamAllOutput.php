<?php

namespace Misakstvanu\LaravelSkautis\Responses\Exports;

final class ExportSeznamAllOutput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $lawType = null,
        public readonly ?string $iC = null,
        public readonly ?string $phone1 = null,
        public readonly ?string $phone1Type = null,
        public readonly ?string $phone2 = null,
        public readonly ?string $phone2Type = null,
        public readonly ?string $phone3 = null,
        public readonly ?string $phone3Type = null,
        public readonly ?string $email = null,
        public readonly ?string $url = null,
        public readonly ?string $city = null,
        public readonly ?string $street = null,
        public readonly ?string $streetNumber = null,
        public readonly ?string $postcode = null,
        public readonly ?float $latitude = null,
        public readonly ?float $longitude = null,
        public readonly ?string $advertiseText = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            lawType: isset($obj->{'LawType'}) ? (string) $obj->{'LawType'} : null,
            iC: isset($obj->{'IC'}) ? (string) $obj->{'IC'} : null,
            phone1: isset($obj->{'Phone1'}) ? (string) $obj->{'Phone1'} : null,
            phone1Type: isset($obj->{'Phone1Type'}) ? (string) $obj->{'Phone1Type'} : null,
            phone2: isset($obj->{'Phone2'}) ? (string) $obj->{'Phone2'} : null,
            phone2Type: isset($obj->{'Phone2Type'}) ? (string) $obj->{'Phone2Type'} : null,
            phone3: isset($obj->{'Phone3'}) ? (string) $obj->{'Phone3'} : null,
            phone3Type: isset($obj->{'Phone3Type'}) ? (string) $obj->{'Phone3Type'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            url: isset($obj->{'Url'}) ? (string) $obj->{'Url'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            streetNumber: isset($obj->{'StreetNumber'}) ? (string) $obj->{'StreetNumber'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            latitude: isset($obj->{'Latitude'}) ? (float) $obj->{'Latitude'} : null,
            longitude: isset($obj->{'Longitude'}) ? (float) $obj->{'Longitude'} : null,
            advertiseText: isset($obj->{'AdvertiseText'}) ? (string) $obj->{'AdvertiseText'} : null,
        );
    }
}
