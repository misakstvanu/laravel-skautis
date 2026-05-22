<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CandidateDetailFunctionAgreementOutput
{
    public function __construct(
        public readonly ?string $unit = null,
        public readonly ?string $unitStreet = null,
        public readonly ?string $unitCity = null,
        public readonly ?string $unitPostcode = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?string $unitIC = null,
        public readonly ?string $personFirstname = null,
        public readonly ?string $personLastname = null,
        public readonly ?string $personBirthdate = null,
        public readonly ?string $birthDistrict = null,
        public readonly ?string $birthRegion = null,
        public readonly ?string $birthName = null,
        public readonly ?string $birthCity = null,
        public readonly ?string $idCitizenship = null,
        public readonly ?string $citizenship = null,
        public readonly ?string $citizenshipCustom = null,
        public readonly ?bool $isForeign = null,
        public readonly ?string $personIdentificationCode = null,
        public readonly ?string $personStreet = null,
        public readonly ?string $personCity = null,
        public readonly ?string $personPostcode = null,
        public readonly ?string $userName = null,
        public readonly ?string $securityCode = null,
        public readonly ?string $function_ = null,
        public readonly ?string $functionText = null,
        public readonly ?string $cityText = null,
        public readonly ?string $date = null,
        public readonly ?string $degreeInFrontOf = null,
        public readonly ?string $degreeBehind = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitStreet: isset($obj->{'UnitStreet'}) ? (string) $obj->{'UnitStreet'} : null,
            unitCity: isset($obj->{'UnitCity'}) ? (string) $obj->{'UnitCity'} : null,
            unitPostcode: isset($obj->{'UnitPostcode'}) ? (string) $obj->{'UnitPostcode'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            unitIC: isset($obj->{'UnitIC'}) ? (string) $obj->{'UnitIC'} : null,
            personFirstname: isset($obj->{'PersonFirstname'}) ? (string) $obj->{'PersonFirstname'} : null,
            personLastname: isset($obj->{'PersonLastname'}) ? (string) $obj->{'PersonLastname'} : null,
            personBirthdate: isset($obj->{'PersonBirthdate'}) ? (string) $obj->{'PersonBirthdate'} : null,
            birthDistrict: isset($obj->{'BirthDistrict'}) ? (string) $obj->{'BirthDistrict'} : null,
            birthRegion: isset($obj->{'BirthRegion'}) ? (string) $obj->{'BirthRegion'} : null,
            birthName: isset($obj->{'BirthName'}) ? (string) $obj->{'BirthName'} : null,
            birthCity: isset($obj->{'BirthCity'}) ? (string) $obj->{'BirthCity'} : null,
            idCitizenship: isset($obj->{'ID_Citizenship'}) ? (string) $obj->{'ID_Citizenship'} : null,
            citizenship: isset($obj->{'Citizenship'}) ? (string) $obj->{'Citizenship'} : null,
            citizenshipCustom: isset($obj->{'CitizenshipCustom'}) ? (string) $obj->{'CitizenshipCustom'} : null,
            isForeign: isset($obj->{'IsForeign'}) ? (bool) $obj->{'IsForeign'} : null,
            personIdentificationCode: isset($obj->{'PersonIdentificationCode'}) ? (string) $obj->{'PersonIdentificationCode'} : null,
            personStreet: isset($obj->{'PersonStreet'}) ? (string) $obj->{'PersonStreet'} : null,
            personCity: isset($obj->{'PersonCity'}) ? (string) $obj->{'PersonCity'} : null,
            personPostcode: isset($obj->{'PersonPostcode'}) ? (string) $obj->{'PersonPostcode'} : null,
            userName: isset($obj->{'UserName'}) ? (string) $obj->{'UserName'} : null,
            securityCode: isset($obj->{'SecurityCode'}) ? (string) $obj->{'SecurityCode'} : null,
            function_: isset($obj->{'Function'}) ? (string) $obj->{'Function'} : null,
            functionText: isset($obj->{'FunctionText'}) ? (string) $obj->{'FunctionText'} : null,
            cityText: isset($obj->{'CityText'}) ? (string) $obj->{'CityText'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            degreeInFrontOf: isset($obj->{'DegreeInFrontOf'}) ? (string) $obj->{'DegreeInFrontOf'} : null,
            degreeBehind: isset($obj->{'DegreeBehind'}) ? (string) $obj->{'DegreeBehind'} : null,
        );
    }
}
