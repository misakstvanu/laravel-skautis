<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class InstructorInvitationInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $eventEducation = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $code = null,
        public readonly ?string $email = null,
        public readonly ?int $idInstructor = null,
        public readonly ?bool $isValid = null,
        public readonly ?string $idInstructorType = null,
        public readonly ?string $instructorType = null,
        public readonly ?string $scoutExperience = null,
        public readonly ?string $eventFocus = null,
        public readonly ?string $professionalExperience = null,
        public readonly ?string $accessCode = null,
        public readonly ?string $accepted = null,
        public readonly ?string $denied = null,
        public readonly ?int $idPersonCurrent = null,
        public readonly ?string $personCurrent = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_Event' => $this->idEvent,
            'EventEducation' => $this->eventEducation,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            'Code' => $this->code,
            'Email' => $this->email,
            'ID_Instructor' => $this->idInstructor,
            'IsValid' => $this->isValid,
            'ID_InstructorType' => $this->idInstructorType,
            'InstructorType' => $this->instructorType,
            'ScoutExperience' => $this->scoutExperience,
            'EventFocus' => $this->eventFocus,
            'ProfessionalExperience' => $this->professionalExperience,
            'AccessCode' => $this->accessCode,
            'Accepted' => $this->accepted,
            'Denied' => $this->denied,
            'ID_PersonCurrent' => $this->idPersonCurrent,
            'PersonCurrent' => $this->personCurrent,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
