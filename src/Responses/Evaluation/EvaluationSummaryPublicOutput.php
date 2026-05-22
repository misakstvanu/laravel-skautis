<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationSummaryPublicOutput
{
    public function __construct(
        public readonly ?int $idEvaluationSection = null,
        public readonly ?string $evaluationSection = null,
        public readonly ?string $sectionDescription = null,
        public readonly ?int $sectionOrder = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?float $score = null,
        public readonly ?string $rating = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idEvaluationSection: isset($obj->{'ID_EvaluationSection'}) ? (int) $obj->{'ID_EvaluationSection'} : null,
            evaluationSection: isset($obj->{'EvaluationSection'}) ? (string) $obj->{'EvaluationSection'} : null,
            sectionDescription: isset($obj->{'SectionDescription'}) ? (string) $obj->{'SectionDescription'} : null,
            sectionOrder: isset($obj->{'SectionOrder'}) ? (int) $obj->{'SectionOrder'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            score: isset($obj->{'Score'}) ? (float) $obj->{'Score'} : null,
            rating: isset($obj->{'Rating'}) ? (string) $obj->{'Rating'} : null,
        );
    }
}
