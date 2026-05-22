<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationAllUnitOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvaluationSubtype = null,
        public readonly ?string $evaluationSubtype = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idEvaluationState = null,
        public readonly ?string $evaluationState = null,
        public readonly ?int $year = null,
        public readonly ?string $color = null,
        public readonly ?string $evaluationRating = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvaluationSubtype: isset($obj->{'ID_EvaluationSubtype'}) ? (int) $obj->{'ID_EvaluationSubtype'} : null,
            evaluationSubtype: isset($obj->{'EvaluationSubtype'}) ? (string) $obj->{'EvaluationSubtype'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idEvaluationState: isset($obj->{'ID_EvaluationState'}) ? (string) $obj->{'ID_EvaluationState'} : null,
            evaluationState: isset($obj->{'EvaluationState'}) ? (string) $obj->{'EvaluationState'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            color: isset($obj->{'Color'}) ? (string) $obj->{'Color'} : null,
            evaluationRating: isset($obj->{'EvaluationRating'}) ? (string) $obj->{'EvaluationRating'} : null,
        );
    }
}
