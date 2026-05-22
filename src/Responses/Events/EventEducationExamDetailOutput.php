<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationExamDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $qualificationType = null,
        public readonly ?string $qualificationTypeKey = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $eventEducation = null,
        public readonly ?int $capacity = null,
        public readonly ?string $date = null,
        public readonly ?int $idEventEducationTypeExam = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?string $idEventEducationCommissionState = null,
        public readonly ?string $eventEducationCommissionState = null,
        public readonly ?string $commissionNote = null,
        public readonly ?int $idPersonLeader = null,
        public readonly ?string $personLeader = null,
        public readonly ?bool $hasLeaderQualification = null,
        public readonly ?string $leaderQualifications = null,
        public readonly ?string $eventLastDay = null,
        public readonly ?bool $canChangeQualificationType = null,
        public readonly ?bool $isQualificationAutomatic = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            idQualificationType: isset($obj->{'ID_QualificationType'}) ? (int) $obj->{'ID_QualificationType'} : null,
            qualificationType: isset($obj->{'QualificationType'}) ? (string) $obj->{'QualificationType'} : null,
            qualificationTypeKey: isset($obj->{'QualificationTypeKey'}) ? (string) $obj->{'QualificationTypeKey'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            eventEducation: isset($obj->{'EventEducation'}) ? (string) $obj->{'EventEducation'} : null,
            capacity: isset($obj->{'Capacity'}) ? (int) $obj->{'Capacity'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            idEventEducationTypeExam: isset($obj->{'ID_EventEducationTypeExam'}) ? (int) $obj->{'ID_EventEducationTypeExam'} : null,
            idEventEducationCourse: isset($obj->{'ID_EventEducationCourse'}) ? (int) $obj->{'ID_EventEducationCourse'} : null,
            idEventEducationCommissionState: isset($obj->{'ID_EventEducationCommissionState'}) ? (string) $obj->{'ID_EventEducationCommissionState'} : null,
            eventEducationCommissionState: isset($obj->{'EventEducationCommissionState'}) ? (string) $obj->{'EventEducationCommissionState'} : null,
            commissionNote: isset($obj->{'CommissionNote'}) ? (string) $obj->{'CommissionNote'} : null,
            idPersonLeader: isset($obj->{'ID_PersonLeader'}) ? (int) $obj->{'ID_PersonLeader'} : null,
            personLeader: isset($obj->{'PersonLeader'}) ? (string) $obj->{'PersonLeader'} : null,
            hasLeaderQualification: isset($obj->{'HasLeaderQualification'}) ? (bool) $obj->{'HasLeaderQualification'} : null,
            leaderQualifications: isset($obj->{'LeaderQualifications'}) ? (string) $obj->{'LeaderQualifications'} : null,
            eventLastDay: isset($obj->{'EventLastDay'}) ? (string) $obj->{'EventLastDay'} : null,
            canChangeQualificationType: isset($obj->{'CanChangeQualificationType'}) ? (bool) $obj->{'CanChangeQualificationType'} : null,
            isQualificationAutomatic: isset($obj->{'IsQualificationAutomatic'}) ? (bool) $obj->{'IsQualificationAutomatic'} : null,
        );
    }
}
