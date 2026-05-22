<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class QualificationRequestUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idPersonCreated = null,
        public readonly ?string $personCreated = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $qualificationType = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $letterNumber = null,
        public readonly ?string $letterExtension = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $idQualificationRequestState = null,
        public readonly ?string $qualificationRequestState = null,
        public readonly ?string $course = null,
        public readonly ?string $decision = null,
        public readonly ?int $idPersonDecision = null,
        public readonly ?string $personDecision = null,
        public readonly ?string $idTempFileScan = null,
        public readonly ?int $idDocument = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_PersonCreated' => $this->idPersonCreated,
            'PersonCreated' => $this->personCreated,
            'ID_QualificationType' => $this->idQualificationType,
            'QualificationType' => $this->qualificationType,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            'LetterNumber' => $this->letterNumber,
            'LetterExtension' => $this->letterExtension,
            'DateCreate' => $this->dateCreate,
            'ID_QualificationRequestState' => $this->idQualificationRequestState,
            'QualificationRequestState' => $this->qualificationRequestState,
            'Course' => $this->course,
            'Decision' => $this->decision,
            'ID_PersonDecision' => $this->idPersonDecision,
            'PersonDecision' => $this->personDecision,
            'ID_TempFileScan' => $this->idTempFileScan,
            'ID_Document' => $this->idDocument,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
