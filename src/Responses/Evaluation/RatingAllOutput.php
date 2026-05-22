<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class RatingAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?float $scoreFrom = null,
        public readonly ?float $scoreTo = null,
        public readonly ?string $color = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            scoreFrom: isset($obj->{'ScoreFrom'}) ? (float) $obj->{'ScoreFrom'} : null,
            scoreTo: isset($obj->{'ScoreTo'}) ? (float) $obj->{'ScoreTo'} : null,
            color: isset($obj->{'Color'}) ? (string) $obj->{'Color'} : null,
        );
    }
}
