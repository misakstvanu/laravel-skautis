<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationLetterIssueInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $qualificationType = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idEventEducationLetterRequestState = null,
        public readonly ?string $eventEducationLetterRequestState = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $date = null,
        public readonly ?string $dateSent = null,
        public readonly ?string $dateGenerated = null,
        public readonly ?int $idEventEducationLetterNumber = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_QualificationType' => $this->idQualificationType,
            'QualificationType' => $this->qualificationType,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'ID_EventEducationLetterRequestState' => $this->idEventEducationLetterRequestState,
            'EventEducationLetterRequestState' => $this->eventEducationLetterRequestState,
            'DateCreate' => $this->dateCreate,
            'Date' => $this->date,
            'DateSent' => $this->dateSent,
            'DateGenerated' => $this->dateGenerated,
            'ID_EventEducationLetterNumber' => $this->idEventEducationLetterNumber,
            'ID_EventEducationType' => $this->idEventEducationType,
            'EventEducationType' => $this->eventEducationType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
