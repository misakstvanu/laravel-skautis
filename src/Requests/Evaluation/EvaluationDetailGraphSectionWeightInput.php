<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationDetailGraphSectionWeightInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvaluationSection = null,
        public readonly ?string $sectionColor = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EvaluationSection' => $this->idEvaluationSection,
            'SectionColor' => $this->sectionColor,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
