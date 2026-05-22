<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationLetterIssueAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?int $int = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idEventEducationLetterRequestState = null,
        public readonly ?int $idEventEducationLetterNumber = null,
        public readonly ?int $idEventEducationType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'ID_QualificationType' => $this->idQualificationType,
            'int' => $this->int,
            'ID_Unit' => $this->idUnit,
            'ID_EventEducationLetterRequestState' => $this->idEventEducationLetterRequestState,
            'ID_EventEducationLetterNumber' => $this->idEventEducationLetterNumber,
            'ID_EventEducationType' => $this->idEventEducationType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
