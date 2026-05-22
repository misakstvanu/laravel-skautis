<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationInsertEventInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvaluationSubtype = null,
        public readonly ?string $evaluationSubtype = null,
        public readonly ?int $evaluationCount = null,
        public readonly ?string $description = null,
        public readonly ?int $idEvaluationVersion = null,
        public readonly ?string $evaluationVersion = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idEvent = null,
        public readonly ?int $idEventParent = null,
        public readonly ?string $event = null,
        public readonly ?string $idEvaluationState = null,
        public readonly ?string $evaluationState = null,
        public readonly ?int $year = null,
        public readonly ?string $note = null,
        public readonly ?string $noteParent = null,
        public readonly ?string $dateLastUpdate = null,
        public readonly ?int $idPersonClose = null,
        public readonly ?string $personClose = null,
        public readonly ?string $dateClose = null,
        public readonly ?float $score = null,
        public readonly ?int $idEvaluationRating = null,
        public readonly ?string $evaluationRating = null,
        public readonly ?string $color = null,
        public readonly ?bool $hideDetail = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EvaluationSubtype' => $this->idEvaluationSubtype,
            'EvaluationSubtype' => $this->evaluationSubtype,
            'EvaluationCount' => $this->evaluationCount,
            'Description' => $this->description,
            'ID_EvaluationVersion' => $this->idEvaluationVersion,
            'EvaluationVersion' => $this->evaluationVersion,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'ID_Event' => $this->idEvent,
            'ID_EventParent' => $this->idEventParent,
            'Event' => $this->event,
            'ID_EvaluationState' => $this->idEvaluationState,
            'EvaluationState' => $this->evaluationState,
            'Year' => $this->year,
            'Note' => $this->note,
            'NoteParent' => $this->noteParent,
            'DateLastUpdate' => $this->dateLastUpdate,
            'ID_PersonClose' => $this->idPersonClose,
            'PersonClose' => $this->personClose,
            'DateClose' => $this->dateClose,
            'Score' => $this->score,
            'ID_EvaluationRating' => $this->idEvaluationRating,
            'EvaluationRating' => $this->evaluationRating,
            'Color' => $this->color,
            'HideDetail' => $this->hideDetail,
            'ID_UnitType' => $this->idUnitType,
            'UnitType' => $this->unitType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
