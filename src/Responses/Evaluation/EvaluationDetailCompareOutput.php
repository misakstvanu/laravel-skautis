<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationDetailCompareOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?float $score = null,
        public readonly ?int $okresCount = null,
        public readonly ?float $okresMin = null,
        public readonly ?float $okresDolniKvantil = null,
        public readonly ?float $okresMedian = null,
        public readonly ?float $okresHorniKvantil = null,
        public readonly ?float $okresMax = null,
        public readonly ?int $krajCount = null,
        public readonly ?float $krajMin = null,
        public readonly ?float $krajDolniKvantil = null,
        public readonly ?float $krajMedian = null,
        public readonly ?float $krajHorniKvantil = null,
        public readonly ?float $krajMax = null,
        public readonly ?int $count = null,
        public readonly ?float $min = null,
        public readonly ?float $dolniKvantil = null,
        public readonly ?float $median = null,
        public readonly ?float $horniKvantil = null,
        public readonly ?float $max = null,
        public readonly ?string $graph = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            score: isset($obj->{'Score'}) ? (float) $obj->{'Score'} : null,
            okresCount: isset($obj->{'OkresCount'}) ? (int) $obj->{'OkresCount'} : null,
            okresMin: isset($obj->{'OkresMin'}) ? (float) $obj->{'OkresMin'} : null,
            okresDolniKvantil: isset($obj->{'OkresDolniKvantil'}) ? (float) $obj->{'OkresDolniKvantil'} : null,
            okresMedian: isset($obj->{'OkresMedian'}) ? (float) $obj->{'OkresMedian'} : null,
            okresHorniKvantil: isset($obj->{'OkresHorniKvantil'}) ? (float) $obj->{'OkresHorniKvantil'} : null,
            okresMax: isset($obj->{'OkresMax'}) ? (float) $obj->{'OkresMax'} : null,
            krajCount: isset($obj->{'KrajCount'}) ? (int) $obj->{'KrajCount'} : null,
            krajMin: isset($obj->{'KrajMin'}) ? (float) $obj->{'KrajMin'} : null,
            krajDolniKvantil: isset($obj->{'KrajDolniKvantil'}) ? (float) $obj->{'KrajDolniKvantil'} : null,
            krajMedian: isset($obj->{'KrajMedian'}) ? (float) $obj->{'KrajMedian'} : null,
            krajHorniKvantil: isset($obj->{'KrajHorniKvantil'}) ? (float) $obj->{'KrajHorniKvantil'} : null,
            krajMax: isset($obj->{'KrajMax'}) ? (float) $obj->{'KrajMax'} : null,
            count: isset($obj->{'Count'}) ? (int) $obj->{'Count'} : null,
            min: isset($obj->{'Min'}) ? (float) $obj->{'Min'} : null,
            dolniKvantil: isset($obj->{'DolniKvantil'}) ? (float) $obj->{'DolniKvantil'} : null,
            median: isset($obj->{'Median'}) ? (float) $obj->{'Median'} : null,
            horniKvantil: isset($obj->{'HorniKvantil'}) ? (float) $obj->{'HorniKvantil'} : null,
            max: isset($obj->{'Max'}) ? (float) $obj->{'Max'} : null,
            graph: isset($obj->{'Graph'}) ? (string) $obj->{'Graph'} : null,
        );
    }
}
