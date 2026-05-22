<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationVersionAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvaluationSubtype = null,
        public readonly ?string $evaluationSubtype = null,
        public readonly ?string $displayName = null,
        public readonly ?int $version = null,
        public readonly ?string $idEvaluationVersionState = null,
        public readonly ?string $evaluationVersionState = null,
        public readonly ?string $dateCreate = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvaluationSubtype: isset($obj->{'ID_EvaluationSubtype'}) ? (int) $obj->{'ID_EvaluationSubtype'} : null,
            evaluationSubtype: isset($obj->{'EvaluationSubtype'}) ? (string) $obj->{'EvaluationSubtype'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            version: isset($obj->{'Version'}) ? (int) $obj->{'Version'} : null,
            idEvaluationVersionState: isset($obj->{'ID_EvaluationVersionState'}) ? (string) $obj->{'ID_EvaluationVersionState'} : null,
            evaluationVersionState: isset($obj->{'EvaluationVersionState'}) ? (string) $obj->{'EvaluationVersionState'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
        );
    }
}
