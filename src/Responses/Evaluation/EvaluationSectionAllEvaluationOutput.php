<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationSectionAllEvaluationOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?float $weight = null,
        public readonly ?int $order = null,
        public readonly ?float $score = null,
        public readonly ?string $rating = null,
        public readonly ?string $ratingColor = null,
        public readonly ?string $color = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            weight: isset($obj->{'Weight'}) ? (float) $obj->{'Weight'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            score: isset($obj->{'Score'}) ? (float) $obj->{'Score'} : null,
            rating: isset($obj->{'Rating'}) ? (string) $obj->{'Rating'} : null,
            ratingColor: isset($obj->{'RatingColor'}) ? (string) $obj->{'RatingColor'} : null,
            color: isset($obj->{'Color'}) ? (string) $obj->{'Color'} : null,
        );
    }
}
