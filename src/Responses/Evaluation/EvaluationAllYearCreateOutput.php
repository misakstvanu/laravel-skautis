<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationAllYearCreateOutput
{
    public function __construct(
        public readonly ?int $year = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
        );
    }
}
