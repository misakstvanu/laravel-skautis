<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationCriteriaAllEvaluationOutput
{
    public function __construct(
        public readonly ?int $idEvaluationSet = null,
        public readonly ?string $evaluationSet = null,
        public readonly ?string $evaluationSetDescription = null,
        public readonly ?int $evaluationSetOrder = null,
        public readonly ?string $evaluationCriteria = null,
        public readonly ?int $evaluationCriteriaOrder = null,
        public readonly ?float $evaluationCriteriaWeight = null,
        public readonly ?float $score = null,
        public readonly ?string $rating = null,
        public readonly ?string $color = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idEvaluationSet: isset($obj->{'ID_EvaluationSet'}) ? (int) $obj->{'ID_EvaluationSet'} : null,
            evaluationSet: isset($obj->{'EvaluationSet'}) ? (string) $obj->{'EvaluationSet'} : null,
            evaluationSetDescription: isset($obj->{'EvaluationSetDescription'}) ? (string) $obj->{'EvaluationSetDescription'} : null,
            evaluationSetOrder: isset($obj->{'EvaluationSetOrder'}) ? (int) $obj->{'EvaluationSetOrder'} : null,
            evaluationCriteria: isset($obj->{'EvaluationCriteria'}) ? (string) $obj->{'EvaluationCriteria'} : null,
            evaluationCriteriaOrder: isset($obj->{'EvaluationCriteriaOrder'}) ? (int) $obj->{'EvaluationCriteriaOrder'} : null,
            evaluationCriteriaWeight: isset($obj->{'EvaluationCriteriaWeight'}) ? (float) $obj->{'EvaluationCriteriaWeight'} : null,
            score: isset($obj->{'Score'}) ? (float) $obj->{'Score'} : null,
            rating: isset($obj->{'Rating'}) ? (string) $obj->{'Rating'} : null,
            color: isset($obj->{'Color'}) ? (string) $obj->{'Color'} : null,
        );
    }
}
