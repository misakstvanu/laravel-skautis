<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationAnswerAllResultInput
{
    public function __construct(
        public readonly ?int $idEvaluation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Evaluation' => $this->idEvaluation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
