<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationPersonAllEvaluationOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvaluation = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $answerCount = null,
        public readonly ?string $lastUpdateDate = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvaluation: isset($obj->{'ID_Evaluation'}) ? (int) $obj->{'ID_Evaluation'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            answerCount: isset($obj->{'AnswerCount'}) ? (int) $obj->{'AnswerCount'} : null,
            lastUpdateDate: isset($obj->{'LastUpdateDate'}) ? (string) $obj->{'LastUpdateDate'} : null,
        );
    }
}
