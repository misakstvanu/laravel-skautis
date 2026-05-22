<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class AdvertisingSummaryOutput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?bool $isWater = null,
        public readonly ?string $advertising_Note = null,
        public readonly ?int $idAdvertisingCategory = null,
        public readonly ?int $advertisingCategory_AgeFrom = null,
        public readonly ?int $advertisingCategory_AgeTo = null,
        public readonly ?string $advertisingCategory_ID_Sex = null,
        public readonly ?string $advertisingCategory_Sex = null,
        public readonly ?string $advertisingCategory_Note = null,
        public readonly ?int $meetingDate_ID = null,
        public readonly ?string $meetingDate_ID_WeekDay = null,
        public readonly ?string $meetingDate_WeekDay = null,
        public readonly mixed $meetingDate_TimeFrom = null,
        public readonly mixed $meetingDate_TimeTo = null,
        public readonly ?string $meetingDate_Periodicity = null,
        public readonly ?int $occupation_ID = null,
        public readonly ?string $occupation_Note = null,
        public readonly ?int $realty_ID = null,
        public readonly ?int $realty_ID_RealtyType = null,
        public readonly ?string $realty_RealtyType = null,
        public readonly ?string $realty_Street = null,
        public readonly ?string $realty_City = null,
        public readonly ?string $realty_Postcode = null,
        public readonly ?float $realty_GpsLatitude = null,
        public readonly ?float $realty_GpsLongitude = null,
        public readonly ?string $realty_Description = null,
        public readonly ?string $realty_Note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            isWater: isset($obj->{'IsWater'}) ? (bool) $obj->{'IsWater'} : null,
            advertising_Note: isset($obj->{'Advertising_Note'}) ? (string) $obj->{'Advertising_Note'} : null,
            idAdvertisingCategory: isset($obj->{'ID_AdvertisingCategory'}) ? (int) $obj->{'ID_AdvertisingCategory'} : null,
            advertisingCategory_AgeFrom: isset($obj->{'AdvertisingCategory_AgeFrom'}) ? (int) $obj->{'AdvertisingCategory_AgeFrom'} : null,
            advertisingCategory_AgeTo: isset($obj->{'AdvertisingCategory_AgeTo'}) ? (int) $obj->{'AdvertisingCategory_AgeTo'} : null,
            advertisingCategory_ID_Sex: isset($obj->{'AdvertisingCategory_ID_Sex'}) ? (string) $obj->{'AdvertisingCategory_ID_Sex'} : null,
            advertisingCategory_Sex: isset($obj->{'AdvertisingCategory_Sex'}) ? (string) $obj->{'AdvertisingCategory_Sex'} : null,
            advertisingCategory_Note: isset($obj->{'AdvertisingCategory_Note'}) ? (string) $obj->{'AdvertisingCategory_Note'} : null,
            meetingDate_ID: isset($obj->{'MeetingDate_ID'}) ? (int) $obj->{'MeetingDate_ID'} : null,
            meetingDate_ID_WeekDay: isset($obj->{'MeetingDate_ID_WeekDay'}) ? (string) $obj->{'MeetingDate_ID_WeekDay'} : null,
            meetingDate_WeekDay: isset($obj->{'MeetingDate_WeekDay'}) ? (string) $obj->{'MeetingDate_WeekDay'} : null,
            meetingDate_TimeFrom: $obj->{'MeetingDate_TimeFrom'} ?? null,
            meetingDate_TimeTo: $obj->{'MeetingDate_TimeTo'} ?? null,
            meetingDate_Periodicity: isset($obj->{'MeetingDate_Periodicity'}) ? (string) $obj->{'MeetingDate_Periodicity'} : null,
            occupation_ID: isset($obj->{'Occupation_ID'}) ? (int) $obj->{'Occupation_ID'} : null,
            occupation_Note: isset($obj->{'Occupation_Note'}) ? (string) $obj->{'Occupation_Note'} : null,
            realty_ID: isset($obj->{'Realty_ID'}) ? (int) $obj->{'Realty_ID'} : null,
            realty_ID_RealtyType: isset($obj->{'Realty_ID_RealtyType'}) ? (int) $obj->{'Realty_ID_RealtyType'} : null,
            realty_RealtyType: isset($obj->{'Realty_RealtyType'}) ? (string) $obj->{'Realty_RealtyType'} : null,
            realty_Street: isset($obj->{'Realty_Street'}) ? (string) $obj->{'Realty_Street'} : null,
            realty_City: isset($obj->{'Realty_City'}) ? (string) $obj->{'Realty_City'} : null,
            realty_Postcode: isset($obj->{'Realty_Postcode'}) ? (string) $obj->{'Realty_Postcode'} : null,
            realty_GpsLatitude: isset($obj->{'Realty_GpsLatitude'}) ? (float) $obj->{'Realty_GpsLatitude'} : null,
            realty_GpsLongitude: isset($obj->{'Realty_GpsLongitude'}) ? (float) $obj->{'Realty_GpsLongitude'} : null,
            realty_Description: isset($obj->{'Realty_Description'}) ? (string) $obj->{'Realty_Description'} : null,
            realty_Note: isset($obj->{'Realty_Note'}) ? (string) $obj->{'Realty_Note'} : null,
        );
    }
}
