<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationAllCompareOutput
{
    public function __construct(
        public readonly ?int $count = null,
        public readonly ?float $min = null,
        public readonly ?float $dolniKvantil = null,
        public readonly ?float $median = null,
        public readonly ?float $horniKvantil = null,
        public readonly ?float $max = null,
        public readonly ?string $idType = null,
        public readonly ?string $type = null,
        public readonly ?string $graph = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            count: isset($obj->{'Count'}) ? (int) $obj->{'Count'} : null,
            min: isset($obj->{'Min'}) ? (float) $obj->{'Min'} : null,
            dolniKvantil: isset($obj->{'DolniKvantil'}) ? (float) $obj->{'DolniKvantil'} : null,
            median: isset($obj->{'Median'}) ? (float) $obj->{'Median'} : null,
            horniKvantil: isset($obj->{'HorniKvantil'}) ? (float) $obj->{'HorniKvantil'} : null,
            max: isset($obj->{'Max'}) ? (float) $obj->{'Max'} : null,
            idType: isset($obj->{'ID_Type'}) ? (string) $obj->{'ID_Type'} : null,
            type: isset($obj->{'Type'}) ? (string) $obj->{'Type'} : null,
            graph: isset($obj->{'Graph'}) ? (string) $obj->{'Graph'} : null,
        );
    }
}
