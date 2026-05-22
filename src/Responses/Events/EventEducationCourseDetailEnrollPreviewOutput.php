<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationCourseDetailEnrollPreviewOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $registrationDeadline = null,
        public readonly ?string $eventEducation = null,
        public readonly ?string $eventEducationCourse = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitNameWithRegistrationNumber = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $unitFullName = null,
        public readonly ?string $loginFrom = null,
        public readonly ?string $loginTo = null,
        public readonly ?bool $isVerdictGroupRequired = null,
        public readonly ?bool $isVerdictDistrictRequired = null,
        public readonly ?bool $isVerdictAreaRequired = null,
        public readonly ?bool $isVerdictHealthRequired = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            registrationDeadline: isset($obj->{'RegistrationDeadline'}) ? (string) $obj->{'RegistrationDeadline'} : null,
            eventEducation: isset($obj->{'EventEducation'}) ? (string) $obj->{'EventEducation'} : null,
            eventEducationCourse: isset($obj->{'EventEducationCourse'}) ? (string) $obj->{'EventEducationCourse'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitNameWithRegistrationNumber: isset($obj->{'UnitNameWithRegistrationNumber'}) ? (string) $obj->{'UnitNameWithRegistrationNumber'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            unitFullName: isset($obj->{'UnitFullName'}) ? (string) $obj->{'UnitFullName'} : null,
            loginFrom: isset($obj->{'LoginFrom'}) ? (string) $obj->{'LoginFrom'} : null,
            loginTo: isset($obj->{'LoginTo'}) ? (string) $obj->{'LoginTo'} : null,
            isVerdictGroupRequired: isset($obj->{'IsVerdictGroupRequired'}) ? (bool) $obj->{'IsVerdictGroupRequired'} : null,
            isVerdictDistrictRequired: isset($obj->{'IsVerdictDistrictRequired'}) ? (bool) $obj->{'IsVerdictDistrictRequired'} : null,
            isVerdictAreaRequired: isset($obj->{'IsVerdictAreaRequired'}) ? (bool) $obj->{'IsVerdictAreaRequired'} : null,
            isVerdictHealthRequired: isset($obj->{'IsVerdictHealthRequired'}) ? (bool) $obj->{'IsVerdictHealthRequired'} : null,
        );
    }
}
