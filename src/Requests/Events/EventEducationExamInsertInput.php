<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationExamInsertInput
{
    public function __construct(
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'IsActive' => $this->isActive,
            'ID_QualificationType' => $this->idQualificationType,
            'QualificationType' => $this->qualificationType,
            'QualificationTypeKey' => $this->qualificationTypeKey,
            'ID_EventEducation' => $this->idEventEducation,
            'EventEducation' => $this->eventEducation,
            'Capacity' => $this->capacity,
            'Date' => $this->date,
            'ID_EventEducationTypeExam' => $this->idEventEducationTypeExam,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'ID_EventEducationCommissionState' => $this->idEventEducationCommissionState,
            'EventEducationCommissionState' => $this->eventEducationCommissionState,
            'CommissionNote' => $this->commissionNote,
            'ID_PersonLeader' => $this->idPersonLeader,
            'PersonLeader' => $this->personLeader,
            'HasLeaderQualification' => $this->hasLeaderQualification,
            'LeaderQualifications' => $this->leaderQualifications,
            'EventLastDay' => $this->eventLastDay,
            'CanChangeQualificationType' => $this->canChangeQualificationType,
            'IsQualificationAutomatic' => $this->isQualificationAutomatic,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
