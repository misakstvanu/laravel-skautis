<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationAllParentOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvaluationSubtype = null,
        public readonly ?string $evaluationSubtype = null,
        public readonly ?int $year = null,
        public readonly ?int $idRating = null,
        public readonly ?string $rating = null,
        public readonly ?float $score = null,
        public readonly ?string $color = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvaluationSubtype: isset($obj->{'ID_EvaluationSubtype'}) ? (int) $obj->{'ID_EvaluationSubtype'} : null,
            evaluationSubtype: isset($obj->{'EvaluationSubtype'}) ? (string) $obj->{'EvaluationSubtype'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            idRating: isset($obj->{'ID_Rating'}) ? (int) $obj->{'ID_Rating'} : null,
            rating: isset($obj->{'Rating'}) ? (string) $obj->{'Rating'} : null,
            score: isset($obj->{'Score'}) ? (float) $obj->{'Score'} : null,
            color: isset($obj->{'Color'}) ? (string) $obj->{'Color'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
        );
    }
}
