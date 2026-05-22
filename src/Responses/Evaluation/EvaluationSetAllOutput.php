<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationSetAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvaluationSection = null,
        public readonly ?string $evaluationSection = null,
        public readonly ?string $colorSection = null,
        public readonly ?string $displayName = null,
        public readonly ?int $order = null,
        public readonly ?string $note = null,
        public readonly ?string $description = null,
        public readonly ?int $orderSection = null,
        public readonly ?int $criteriaCount = null,
        public readonly ?float $weightSection = null,
        public readonly ?float $weight = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvaluationSection: isset($obj->{'ID_EvaluationSection'}) ? (int) $obj->{'ID_EvaluationSection'} : null,
            evaluationSection: isset($obj->{'EvaluationSection'}) ? (string) $obj->{'EvaluationSection'} : null,
            colorSection: isset($obj->{'ColorSection'}) ? (string) $obj->{'ColorSection'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            orderSection: isset($obj->{'OrderSection'}) ? (int) $obj->{'OrderSection'} : null,
            criteriaCount: isset($obj->{'CriteriaCount'}) ? (int) $obj->{'CriteriaCount'} : null,
            weightSection: isset($obj->{'WeightSection'}) ? (float) $obj->{'WeightSection'} : null,
            weight: isset($obj->{'Weight'}) ? (float) $obj->{'Weight'} : null,
        );
    }
}
