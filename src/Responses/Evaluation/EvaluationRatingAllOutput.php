<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationRatingAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvaluationVersion = null,
        public readonly ?string $displayName = null,
        public readonly ?float $scoreFrom = null,
        public readonly ?float $scoreTo = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvaluationVersion: isset($obj->{'ID_EvaluationVersion'}) ? (int) $obj->{'ID_EvaluationVersion'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            scoreFrom: isset($obj->{'ScoreFrom'}) ? (float) $obj->{'ScoreFrom'} : null,
            scoreTo: isset($obj->{'ScoreTo'}) ? (float) $obj->{'ScoreTo'} : null,
        );
    }
}
