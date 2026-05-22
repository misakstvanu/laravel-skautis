<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationCourseTermDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?int $idEventEducationTerm = null,
        public readonly ?string $eventEducationTerm = null,
        public readonly ?int $idEventEducationLocation = null,
        public readonly ?string $eventEducationLocation = null,
        public readonly ?string $idEventEducationCourseType = null,
        public readonly ?string $eventEducationCourseType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducationCourse: isset($obj->{'ID_EventEducationCourse'}) ? (int) $obj->{'ID_EventEducationCourse'} : null,
            idEventEducationTerm: isset($obj->{'ID_EventEducationTerm'}) ? (int) $obj->{'ID_EventEducationTerm'} : null,
            eventEducationTerm: isset($obj->{'EventEducationTerm'}) ? (string) $obj->{'EventEducationTerm'} : null,
            idEventEducationLocation: isset($obj->{'ID_EventEducationLocation'}) ? (int) $obj->{'ID_EventEducationLocation'} : null,
            eventEducationLocation: isset($obj->{'EventEducationLocation'}) ? (string) $obj->{'EventEducationLocation'} : null,
            idEventEducationCourseType: isset($obj->{'ID_EventEducationCourseType'}) ? (string) $obj->{'ID_EventEducationCourseType'} : null,
            eventEducationCourseType: isset($obj->{'EventEducationCourseType'}) ? (string) $obj->{'EventEducationCourseType'} : null,
        );
    }
}
