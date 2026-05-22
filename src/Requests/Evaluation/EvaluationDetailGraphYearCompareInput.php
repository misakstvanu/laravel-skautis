<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationDetailGraphYearCompareInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idEvent = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'ID_Event' => $this->idEvent,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
