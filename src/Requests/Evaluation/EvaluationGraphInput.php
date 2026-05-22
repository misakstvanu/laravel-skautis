<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationGraphInput
{
    public function __construct(
        public readonly ?bool $drawGraph = null,
        public readonly ?int $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DrawGraph' => $this->drawGraph,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
