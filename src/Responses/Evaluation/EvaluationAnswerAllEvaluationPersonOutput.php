<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationAnswerAllEvaluationPersonOutput
{
    public function __construct(
        public readonly ?int $idEvaluationSection = null,
        public readonly ?string $evaluationSection = null,
        public readonly ?string $sectionDescription = null,
        public readonly ?int $sectionOrder = null,
        public readonly ?int $idEvaluationSet = null,
        public readonly ?string $evaluationSet = null,
        public readonly ?string $setDescription = null,
        public readonly ?int $setOrder = null,
        public readonly ?string $sectionSetOrder = null,
        public readonly ?int $idEvaluationCriteria = null,
        public readonly ?string $evaluationCriteria = null,
        public readonly ?int $criteriaOrder = null,
        public readonly ?float $answer = null,
        public readonly ?string $answer1 = null,
        public readonly ?string $answer2 = null,
        public readonly ?string $answer3 = null,
        public readonly ?string $answer4 = null,
        public readonly ?int $personAnswer1 = null,
        public readonly ?int $personAnswer2 = null,
        public readonly ?int $personAnswer3 = null,
        public readonly ?int $personAnswer4 = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idEvaluationSection: isset($obj->{'ID_EvaluationSection'}) ? (int) $obj->{'ID_EvaluationSection'} : null,
            evaluationSection: isset($obj->{'EvaluationSection'}) ? (string) $obj->{'EvaluationSection'} : null,
            sectionDescription: isset($obj->{'SectionDescription'}) ? (string) $obj->{'SectionDescription'} : null,
            sectionOrder: isset($obj->{'SectionOrder'}) ? (int) $obj->{'SectionOrder'} : null,
            idEvaluationSet: isset($obj->{'ID_EvaluationSet'}) ? (int) $obj->{'ID_EvaluationSet'} : null,
            evaluationSet: isset($obj->{'EvaluationSet'}) ? (string) $obj->{'EvaluationSet'} : null,
            setDescription: isset($obj->{'SetDescription'}) ? (string) $obj->{'SetDescription'} : null,
            setOrder: isset($obj->{'SetOrder'}) ? (int) $obj->{'SetOrder'} : null,
            sectionSetOrder: isset($obj->{'SectionSetOrder'}) ? (string) $obj->{'SectionSetOrder'} : null,
            idEvaluationCriteria: isset($obj->{'ID_EvaluationCriteria'}) ? (int) $obj->{'ID_EvaluationCriteria'} : null,
            evaluationCriteria: isset($obj->{'EvaluationCriteria'}) ? (string) $obj->{'EvaluationCriteria'} : null,
            criteriaOrder: isset($obj->{'CriteriaOrder'}) ? (int) $obj->{'CriteriaOrder'} : null,
            answer: isset($obj->{'Answer'}) ? (float) $obj->{'Answer'} : null,
            answer1: isset($obj->{'Answer1'}) ? (string) $obj->{'Answer1'} : null,
            answer2: isset($obj->{'Answer2'}) ? (string) $obj->{'Answer2'} : null,
            answer3: isset($obj->{'Answer3'}) ? (string) $obj->{'Answer3'} : null,
            answer4: isset($obj->{'Answer4'}) ? (string) $obj->{'Answer4'} : null,
            personAnswer1: isset($obj->{'PersonAnswer1'}) ? (int) $obj->{'PersonAnswer1'} : null,
            personAnswer2: isset($obj->{'PersonAnswer2'}) ? (int) $obj->{'PersonAnswer2'} : null,
            personAnswer3: isset($obj->{'PersonAnswer3'}) ? (int) $obj->{'PersonAnswer3'} : null,
            personAnswer4: isset($obj->{'PersonAnswer4'}) ? (int) $obj->{'PersonAnswer4'} : null,
        );
    }
}
