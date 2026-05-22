<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationSetInsertInput
{
    public function __construct(
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EvaluationSection' => $this->idEvaluationSection,
            'EvaluationSection' => $this->evaluationSection,
            'DisplayName' => $this->displayName,
            'Order' => $this->order,
            'Weight' => $this->weight,
            'Note' => $this->note,
            'Description' => $this->description,
            'ID_EvaluationSubtype' => $this->idEvaluationSubtype,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
