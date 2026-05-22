<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationCourseTermDetailPublicOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $eventEducation = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?string $idEventEducationCourseType = null,
        public readonly ?string $eventEducationCourseType = null,
        public readonly ?int $courseLength = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?int $idDistrict = null,
        public readonly ?string $district = null,
        public readonly ?int $idRegion = null,
        public readonly ?string $region = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            eventEducation: isset($obj->{'EventEducation'}) ? (string) $obj->{'EventEducation'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            idEventEducationCourseType: isset($obj->{'ID_EventEducationCourseType'}) ? (string) $obj->{'ID_EventEducationCourseType'} : null,
            eventEducationCourseType: isset($obj->{'EventEducationCourseType'}) ? (string) $obj->{'EventEducationCourseType'} : null,
            courseLength: isset($obj->{'CourseLength'}) ? (int) $obj->{'CourseLength'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            idDistrict: isset($obj->{'ID_District'}) ? (int) $obj->{'ID_District'} : null,
            district: isset($obj->{'District'}) ? (string) $obj->{'District'} : null,
            idRegion: isset($obj->{'ID_Region'}) ? (int) $obj->{'ID_Region'} : null,
            region: isset($obj->{'Region'}) ? (string) $obj->{'Region'} : null,
        );
    }
}
