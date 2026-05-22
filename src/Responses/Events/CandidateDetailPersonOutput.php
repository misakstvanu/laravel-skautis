<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CandidateDetailPersonOutput
{
    public function __construct(
        public readonly ?int $idPersonPhotoSmall = null,
        public readonly ?int $idPersonPhotoNormal = null,
        public readonly ?int $idPersonPhotoMedium = null,
        public readonly ?int $idPersonPhotoBig = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $degreeInFrontOf = null,
        public readonly ?string $degreeBehind = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $nickName = null,
        public readonly ?string $birthday = null,
        public readonly ?string $city = null,
        public readonly ?int $yearFrom = null,
        public readonly ?string $photoExtension = null,
        public readonly ?string $maidenName = null,
        public readonly ?int $idDistrictBirth = null,
        public readonly ?string $birthCity = null,
        public readonly ?string $citizenship = null,
        public readonly ?string $citizenshipCustom = null,
        public readonly ?string $idCitizenship = null,
        public readonly ?string $districtBirth = null,
        public readonly ?bool $collectBirthInfoData = null,
        public readonly ?string $career = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $educationType = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idPersonPhotoSmall: isset($obj->{'ID_PersonPhotoSmall'}) ? (int) $obj->{'ID_PersonPhotoSmall'} : null,
            idPersonPhotoNormal: isset($obj->{'ID_PersonPhotoNormal'}) ? (int) $obj->{'ID_PersonPhotoNormal'} : null,
            idPersonPhotoMedium: isset($obj->{'ID_PersonPhotoMedium'}) ? (int) $obj->{'ID_PersonPhotoMedium'} : null,
            idPersonPhotoBig: isset($obj->{'ID_PersonPhotoBig'}) ? (int) $obj->{'ID_PersonPhotoBig'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            degreeInFrontOf: isset($obj->{'DegreeInFrontOf'}) ? (string) $obj->{'DegreeInFrontOf'} : null,
            degreeBehind: isset($obj->{'DegreeBehind'}) ? (string) $obj->{'DegreeBehind'} : null,
            firstName: isset($obj->{'FirstName'}) ? (string) $obj->{'FirstName'} : null,
            lastName: isset($obj->{'LastName'}) ? (string) $obj->{'LastName'} : null,
            nickName: isset($obj->{'NickName'}) ? (string) $obj->{'NickName'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            yearFrom: isset($obj->{'YearFrom'}) ? (int) $obj->{'YearFrom'} : null,
            photoExtension: isset($obj->{'PhotoExtension'}) ? (string) $obj->{'PhotoExtension'} : null,
            maidenName: isset($obj->{'MaidenName'}) ? (string) $obj->{'MaidenName'} : null,
            idDistrictBirth: isset($obj->{'ID_DistrictBirth'}) ? (int) $obj->{'ID_DistrictBirth'} : null,
            birthCity: isset($obj->{'BirthCity'}) ? (string) $obj->{'BirthCity'} : null,
            citizenship: isset($obj->{'Citizenship'}) ? (string) $obj->{'Citizenship'} : null,
            citizenshipCustom: isset($obj->{'CitizenshipCustom'}) ? (string) $obj->{'CitizenshipCustom'} : null,
            idCitizenship: isset($obj->{'ID_Citizenship'}) ? (string) $obj->{'ID_Citizenship'} : null,
            districtBirth: isset($obj->{'DistrictBirth'}) ? (string) $obj->{'DistrictBirth'} : null,
            collectBirthInfoData: isset($obj->{'CollectBirthInfoData'}) ? (bool) $obj->{'CollectBirthInfoData'} : null,
            career: isset($obj->{'Career'}) ? (string) $obj->{'Career'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            educationType: isset($obj->{'EducationType'}) ? (string) $obj->{'EducationType'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
