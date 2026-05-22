<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationSectionDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idEvaluationVersion = null,
        public readonly ?string $displayName = null,
        public readonly ?int $order = null,
        public readonly ?float $weight = null,
        public readonly ?string $note = null,
        public readonly ?string $description = null,
        public readonly ?int $idEvaluationSubtype = null,
        public readonly ?string $evaluationSubtype = null,
        public readonly ?string $color = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvaluationVersion: isset($obj->{'ID_EvaluationVersion'}) ? (int) $obj->{'ID_EvaluationVersion'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            weight: isset($obj->{'Weight'}) ? (float) $obj->{'Weight'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            idEvaluationSubtype: isset($obj->{'ID_EvaluationSubtype'}) ? (int) $obj->{'ID_EvaluationSubtype'} : null,
            evaluationSubtype: isset($obj->{'EvaluationSubtype'}) ? (string) $obj->{'EvaluationSubtype'} : null,
            color: isset($obj->{'Color'}) ? (string) $obj->{'Color'} : null,
        );
    }
}
