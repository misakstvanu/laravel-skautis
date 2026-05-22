<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationAllGraphParticipationYearCompareInput
{
    public function __construct(
        public readonly ?string $evaluationTypeID = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'EvaluationTypeID' => $this->evaluationTypeID,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
