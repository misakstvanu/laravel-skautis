<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvaluationSubtype: isset($obj->{'ID_EvaluationSubtype'}) ? (int) $obj->{'ID_EvaluationSubtype'} : null,
            evaluationSubtype: isset($obj->{'EvaluationSubtype'}) ? (string) $obj->{'EvaluationSubtype'} : null,
            evaluationCount: isset($obj->{'EvaluationCount'}) ? (int) $obj->{'EvaluationCount'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            idEvaluationVersion: isset($obj->{'ID_EvaluationVersion'}) ? (int) $obj->{'ID_EvaluationVersion'} : null,
            evaluationVersion: isset($obj->{'EvaluationVersion'}) ? (string) $obj->{'EvaluationVersion'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            idEventParent: isset($obj->{'ID_EventParent'}) ? (int) $obj->{'ID_EventParent'} : null,
            event: isset($obj->{'Event'}) ? (string) $obj->{'Event'} : null,
            idEvaluationState: isset($obj->{'ID_EvaluationState'}) ? (string) $obj->{'ID_EvaluationState'} : null,
            evaluationState: isset($obj->{'EvaluationState'}) ? (string) $obj->{'EvaluationState'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            noteParent: isset($obj->{'NoteParent'}) ? (string) $obj->{'NoteParent'} : null,
            dateLastUpdate: isset($obj->{'DateLastUpdate'}) ? (string) $obj->{'DateLastUpdate'} : null,
            idPersonClose: isset($obj->{'ID_PersonClose'}) ? (int) $obj->{'ID_PersonClose'} : null,
            personClose: isset($obj->{'PersonClose'}) ? (string) $obj->{'PersonClose'} : null,
            dateClose: isset($obj->{'DateClose'}) ? (string) $obj->{'DateClose'} : null,
            score: isset($obj->{'Score'}) ? (float) $obj->{'Score'} : null,
            idEvaluationRating: isset($obj->{'ID_EvaluationRating'}) ? (int) $obj->{'ID_EvaluationRating'} : null,
            evaluationRating: isset($obj->{'EvaluationRating'}) ? (string) $obj->{'EvaluationRating'} : null,
            color: isset($obj->{'Color'}) ? (string) $obj->{'Color'} : null,
            hideDetail: isset($obj->{'HideDetail'}) ? (bool) $obj->{'HideDetail'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
        );
    }
}
