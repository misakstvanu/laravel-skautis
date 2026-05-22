<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationDetailGraphYearCompareOutput
{
    public function __construct(
        public readonly ?string $graph = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            graph: isset($obj->{'Graph'}) ? (string) $obj->{'Graph'} : null,
        );
    }
}
