<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantUpdateEvaluationInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $evaluation = null,
        public readonly mixed $projectQuestion = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Evaluation' => $this->evaluation,
            'ProjectQuestion' => $this->projectQuestion,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
