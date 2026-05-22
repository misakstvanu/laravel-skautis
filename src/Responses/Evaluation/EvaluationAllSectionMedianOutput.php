<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationAllSectionMedianOutput
{
    public function __construct(
        public readonly ?string $evaluationSection = null,
        public readonly ?int $year = null,
        public readonly ?float $median = null,
        public readonly ?string $rating = null,
        public readonly ?string $ratingColor = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            evaluationSection: isset($obj->{'EvaluationSection'}) ? (string) $obj->{'EvaluationSection'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            median: isset($obj->{'Median'}) ? (float) $obj->{'Median'} : null,
            rating: isset($obj->{'Rating'}) ? (string) $obj->{'Rating'} : null,
            ratingColor: isset($obj->{'RatingColor'}) ? (string) $obj->{'RatingColor'} : null,
        );
    }
}
