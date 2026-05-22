<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationAllEventInput
{
    public function __construct(
        public readonly ?string $idEvaluationState = null,
        public readonly ?int $year = null,
        public readonly ?string $unit = null,
        public readonly ?bool $notExists = null,
        public readonly ?string $idEventType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EvaluationState' => $this->idEvaluationState,
            'Year' => $this->year,
            'Unit' => $this->unit,
            'NotExists' => $this->notExists,
            'ID_EventType' => $this->idEventType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
