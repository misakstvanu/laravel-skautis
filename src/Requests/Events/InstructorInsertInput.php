<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class InstructorInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $eventEducation = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idInstructorType = null,
        public readonly ?string $instructorType = null,
        public readonly ?string $scoutExperience = null,
        public readonly ?string $eventFocus = null,
        public readonly ?string $professionalExperience = null,
        public readonly ?string $email = null,
        public readonly ?bool $isSystem = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventEducation' => $this->idEventEducation,
            'EventEducation' => $this->eventEducation,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_InstructorType' => $this->idInstructorType,
            'InstructorType' => $this->instructorType,
            'ScoutExperience' => $this->scoutExperience,
            'EventFocus' => $this->eventFocus,
            'ProfessionalExperience' => $this->professionalExperience,
            'Email' => $this->email,
            'IsSystem' => $this->isSystem,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
