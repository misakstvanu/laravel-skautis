<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class ParticipantCourseTermAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idParticipantEducation = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $civilName = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?string $eventEducationCourse = null,
        public readonly ?bool $hadMembership = null,
        public readonly ?bool $hadNoMembership = null,
        public readonly ?bool $isOverFifteen = null,
        public readonly ?bool $isRealParticipationSet = null,
        public readonly ?string $birthdate = null,
        public readonly ?string $address = null,
        public readonly ?int $totalDays = null,
        public readonly ?int $totalDaysReal = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idParticipantEducation: isset($obj->{'ID_ParticipantEducation'}) ? (int) $obj->{'ID_ParticipantEducation'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            civilName: isset($obj->{'CivilName'}) ? (string) $obj->{'CivilName'} : null,
            idEventEducationCourse: isset($obj->{'ID_EventEducationCourse'}) ? (int) $obj->{'ID_EventEducationCourse'} : null,
            eventEducationCourse: isset($obj->{'EventEducationCourse'}) ? (string) $obj->{'EventEducationCourse'} : null,
            hadMembership: isset($obj->{'HadMembership'}) ? (bool) $obj->{'HadMembership'} : null,
            hadNoMembership: isset($obj->{'HadNoMembership'}) ? (bool) $obj->{'HadNoMembership'} : null,
            isOverFifteen: isset($obj->{'IsOverFifteen'}) ? (bool) $obj->{'IsOverFifteen'} : null,
            isRealParticipationSet: isset($obj->{'IsRealParticipationSet'}) ? (bool) $obj->{'IsRealParticipationSet'} : null,
            birthdate: isset($obj->{'Birthdate'}) ? (string) $obj->{'Birthdate'} : null,
            address: isset($obj->{'Address'}) ? (string) $obj->{'Address'} : null,
            totalDays: isset($obj->{'TotalDays'}) ? (int) $obj->{'TotalDays'} : null,
            totalDaysReal: isset($obj->{'TotalDaysReal'}) ? (int) $obj->{'TotalDaysReal'} : null,
        );
    }
}
