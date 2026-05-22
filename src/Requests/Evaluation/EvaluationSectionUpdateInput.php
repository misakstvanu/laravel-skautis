<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationSectionUpdateInput
{
    public function __construct(
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EvaluationVersion' => $this->idEvaluationVersion,
            'DisplayName' => $this->displayName,
            'Order' => $this->order,
            'Weight' => $this->weight,
            'Note' => $this->note,
            'Description' => $this->description,
            'ID_EvaluationSubtype' => $this->idEvaluationSubtype,
            'EvaluationSubtype' => $this->evaluationSubtype,
            'Color' => $this->color,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
