<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationGraphOutput
{
    public function __construct(
        public readonly ?int $evaluationCount = null,
        public readonly ?int $idEvaluationSection = null,
        public readonly ?string $evaluationSection = null,
        public readonly ?int $orderSection = null,
        public readonly ?string $colorSection = null,
        public readonly ?int $idEvaluationSet = null,
        public readonly ?string $evaluationSet = null,
        public readonly ?string $orderSet = null,
        public readonly ?float $weight = null,
        public readonly ?float $score = null,
        public readonly ?bool $isStrong = null,
        public readonly ?bool $isWeak = null,
        public readonly ?string $graph = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            evaluationCount: isset($obj->{'EvaluationCount'}) ? (int) $obj->{'EvaluationCount'} : null,
            idEvaluationSection: isset($obj->{'ID_EvaluationSection'}) ? (int) $obj->{'ID_EvaluationSection'} : null,
            evaluationSection: isset($obj->{'EvaluationSection'}) ? (string) $obj->{'EvaluationSection'} : null,
            orderSection: isset($obj->{'OrderSection'}) ? (int) $obj->{'OrderSection'} : null,
            colorSection: isset($obj->{'ColorSection'}) ? (string) $obj->{'ColorSection'} : null,
            idEvaluationSet: isset($obj->{'ID_EvaluationSet'}) ? (int) $obj->{'ID_EvaluationSet'} : null,
            evaluationSet: isset($obj->{'EvaluationSet'}) ? (string) $obj->{'EvaluationSet'} : null,
            orderSet: isset($obj->{'OrderSet'}) ? (string) $obj->{'OrderSet'} : null,
            weight: isset($obj->{'Weight'}) ? (float) $obj->{'Weight'} : null,
            score: isset($obj->{'Score'}) ? (float) $obj->{'Score'} : null,
            isStrong: isset($obj->{'IsStrong'}) ? (bool) $obj->{'IsStrong'} : null,
            isWeak: isset($obj->{'IsWeak'}) ? (bool) $obj->{'IsWeak'} : null,
            graph: isset($obj->{'Graph'}) ? (string) $obj->{'Graph'} : null,
        );
    }
}
