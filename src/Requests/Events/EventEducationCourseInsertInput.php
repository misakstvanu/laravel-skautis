<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationCourseInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?int $idOccupation = null,
        public readonly ?string $occupation = null,
        public readonly ?int $capacityCourse = null,
        public readonly ?int $capacitySubstitute = null,
        public readonly ?string $registrationDeadline = null,
        public readonly ?int $estimatedParticipantCount = null,
        public readonly ?string $note = null,
        public readonly ?string $eventEducation = null,
        public readonly ?bool $canUpdateType = null,
        public readonly ?bool $isContractor = null,
        public readonly ?string $accreditationNumber = null,
        public readonly ?bool $isAccredited = null,
        public readonly ?float $fulfillment = null,
        public readonly ?int $personDays = null,
        public readonly ?bool $isCustomPersonDays = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isAccreditedExternal = null,
        public readonly ?string $loginFrom = null,
        public readonly ?string $loginTo = null,
        public readonly ?bool $loginSkautis = null,
        public readonly ?string $reminderCount = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'IsActive' => $this->isActive,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventEducationType' => $this->idEventEducationType,
            'EventEducationType' => $this->eventEducationType,
            'ID_Occupation' => $this->idOccupation,
            'Occupation' => $this->occupation,
            'CapacityCourse' => $this->capacityCourse,
            'CapacitySubstitute' => $this->capacitySubstitute,
            'RegistrationDeadline' => $this->registrationDeadline,
            'EstimatedParticipantCount' => $this->estimatedParticipantCount,
            'Note' => $this->note,
            'EventEducation' => $this->eventEducation,
            'CanUpdateType' => $this->canUpdateType,
            'IsContractor' => $this->isContractor,
            'AccreditationNumber' => $this->accreditationNumber,
            'IsAccredited' => $this->isAccredited,
            'Fulfillment' => $this->fulfillment,
            'PersonDays' => $this->personDays,
            'IsCustomPersonDays' => $this->isCustomPersonDays,
            'DisplayName' => $this->displayName,
            'IsAccreditedExternal' => $this->isAccreditedExternal,
            'LoginFrom' => $this->loginFrom,
            'LoginTo' => $this->loginTo,
            'LoginSkautis' => $this->loginSkautis,
            'ReminderCount' => $this->reminderCount,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
