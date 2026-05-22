<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationDetailYearCompareOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $year = null,
        public readonly ?int $idRating = null,
        public readonly ?string $rating = null,
        public readonly ?float $score = null,
        public readonly ?string $color = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            idRating: isset($obj->{'ID_Rating'}) ? (int) $obj->{'ID_Rating'} : null,
            rating: isset($obj->{'Rating'}) ? (string) $obj->{'Rating'} : null,
            score: isset($obj->{'Score'}) ? (float) $obj->{'Score'} : null,
            color: isset($obj->{'Color'}) ? (string) $obj->{'Color'} : null,
        );
    }
}
