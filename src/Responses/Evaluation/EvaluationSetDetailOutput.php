<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationSetDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idEvaluationSection = null,
        public readonly ?string $evaluationSection = null,
        public readonly ?string $displayName = null,
        public readonly ?int $order = null,
        public readonly ?float $weight = null,
        public readonly ?string $note = null,
        public readonly ?string $description = null,
        public readonly ?int $idEvaluationSubtype = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvaluationSection: isset($obj->{'ID_EvaluationSection'}) ? (int) $obj->{'ID_EvaluationSection'} : null,
            evaluationSection: isset($obj->{'EvaluationSection'}) ? (string) $obj->{'EvaluationSection'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            weight: isset($obj->{'Weight'}) ? (float) $obj->{'Weight'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            idEvaluationSubtype: isset($obj->{'ID_EvaluationSubtype'}) ? (int) $obj->{'ID_EvaluationSubtype'} : null,
        );
    }
}
