<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationCriteriaDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idEvaluationSet = null,
        public readonly ?string $evaluationSet = null,
        public readonly ?string $displayName = null,
        public readonly ?int $order = null,
        public readonly ?float $weight = null,
        public readonly ?string $answer1 = null,
        public readonly ?string $shift1 = null,
        public readonly ?string $answer2 = null,
        public readonly ?string $shift2 = null,
        public readonly ?string $answer3 = null,
        public readonly ?string $shift3 = null,
        public readonly ?string $answer4 = null,
        public readonly ?string $note = null,
        public readonly ?string $idEvaluationVersionState = null,
        public readonly ?string $evaluationVersionState = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvaluationSet: isset($obj->{'ID_EvaluationSet'}) ? (int) $obj->{'ID_EvaluationSet'} : null,
            evaluationSet: isset($obj->{'EvaluationSet'}) ? (string) $obj->{'EvaluationSet'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            weight: isset($obj->{'Weight'}) ? (float) $obj->{'Weight'} : null,
            answer1: isset($obj->{'Answer1'}) ? (string) $obj->{'Answer1'} : null,
            shift1: isset($obj->{'Shift1'}) ? (string) $obj->{'Shift1'} : null,
            answer2: isset($obj->{'Answer2'}) ? (string) $obj->{'Answer2'} : null,
            shift2: isset($obj->{'Shift2'}) ? (string) $obj->{'Shift2'} : null,
            answer3: isset($obj->{'Answer3'}) ? (string) $obj->{'Answer3'} : null,
            shift3: isset($obj->{'Shift3'}) ? (string) $obj->{'Shift3'} : null,
            answer4: isset($obj->{'Answer4'}) ? (string) $obj->{'Answer4'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idEvaluationVersionState: isset($obj->{'ID_EvaluationVersionState'}) ? (string) $obj->{'ID_EvaluationVersionState'} : null,
            evaluationVersionState: isset($obj->{'EvaluationVersionState'}) ? (string) $obj->{'EvaluationVersionState'} : null,
        );
    }
}
