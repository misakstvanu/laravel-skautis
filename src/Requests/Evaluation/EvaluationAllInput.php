<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationAllInput
{
    public function __construct(
        public readonly ?string $idEvaluationState = null,
        public readonly ?int $year = null,
        public readonly ?string $unit = null,
        public readonly ?bool $notExists = null,
        public readonly ?bool $isUnit = null,
        public readonly ?string $idEventType = null,
        public readonly ?int $idEventEducationType = null,
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
            'IsUnit' => $this->isUnit,
            'ID_EventType' => $this->idEventType,
            'ID_EventEducationType' => $this->idEventEducationType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
