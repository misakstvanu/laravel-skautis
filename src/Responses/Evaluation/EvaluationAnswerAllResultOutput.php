<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationAnswerAllResultOutput
{
    public function __construct(
        public readonly ?int $idEvaluationSection = null,
        public readonly ?string $evaluationSection = null,
        public readonly ?string $sectionDescription = null,
        public readonly ?int $sectionOrder = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
        public readonly ?float $score = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idEvaluationSection: isset($obj->{'ID_EvaluationSection'}) ? (int) $obj->{'ID_EvaluationSection'} : null,
            evaluationSection: isset($obj->{'EvaluationSection'}) ? (string) $obj->{'EvaluationSection'} : null,
            sectionDescription: isset($obj->{'SectionDescription'}) ? (string) $obj->{'SectionDescription'} : null,
            sectionOrder: isset($obj->{'SectionOrder'}) ? (int) $obj->{'SectionOrder'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
            score: isset($obj->{'Score'}) ? (float) $obj->{'Score'} : null,
        );
    }
}
