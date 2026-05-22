<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationSetAllEvaluationOutput
{
    public function __construct(
        public readonly ?int $idEvaluationSection = null,
        public readonly ?string $evaluationSection = null,
        public readonly ?float $weightSection = null,
        public readonly ?int $orderSection = null,
        public readonly ?float $scoreSection = null,
        public readonly ?string $ratingSection = null,
        public readonly ?string $colorSection = null,
        public readonly ?int $idEvaluationSet = null,
        public readonly ?string $evaluationSet = null,
        public readonly ?float $weightSet = null,
        public readonly ?string $orderSet = null,
        public readonly ?float $scoreSet = null,
        public readonly ?string $ratingSet = null,
        public readonly ?string $colorSet = null,
        public readonly ?bool $isStrong = null,
        public readonly ?bool $isWeak = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idEvaluationSection: isset($obj->{'ID_EvaluationSection'}) ? (int) $obj->{'ID_EvaluationSection'} : null,
            evaluationSection: isset($obj->{'EvaluationSection'}) ? (string) $obj->{'EvaluationSection'} : null,
            weightSection: isset($obj->{'WeightSection'}) ? (float) $obj->{'WeightSection'} : null,
            orderSection: isset($obj->{'OrderSection'}) ? (int) $obj->{'OrderSection'} : null,
            scoreSection: isset($obj->{'ScoreSection'}) ? (float) $obj->{'ScoreSection'} : null,
            ratingSection: isset($obj->{'RatingSection'}) ? (string) $obj->{'RatingSection'} : null,
            colorSection: isset($obj->{'ColorSection'}) ? (string) $obj->{'ColorSection'} : null,
            idEvaluationSet: isset($obj->{'ID_EvaluationSet'}) ? (int) $obj->{'ID_EvaluationSet'} : null,
            evaluationSet: isset($obj->{'EvaluationSet'}) ? (string) $obj->{'EvaluationSet'} : null,
            weightSet: isset($obj->{'WeightSet'}) ? (float) $obj->{'WeightSet'} : null,
            orderSet: isset($obj->{'OrderSet'}) ? (string) $obj->{'OrderSet'} : null,
            scoreSet: isset($obj->{'ScoreSet'}) ? (float) $obj->{'ScoreSet'} : null,
            ratingSet: isset($obj->{'RatingSet'}) ? (string) $obj->{'RatingSet'} : null,
            colorSet: isset($obj->{'ColorSet'}) ? (string) $obj->{'ColorSet'} : null,
            isStrong: isset($obj->{'IsStrong'}) ? (bool) $obj->{'IsStrong'} : null,
            isWeak: isset($obj->{'IsWeak'}) ? (bool) $obj->{'IsWeak'} : null,
        );
    }
}
