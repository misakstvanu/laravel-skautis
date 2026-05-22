<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationAllPersonInput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?bool $isUnit = null,
        public readonly ?bool $notExists = null,
        public readonly ?string $idEventType = null,
        public readonly ?int $idEventEducationType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Year' => $this->year,
            'IsUnit' => $this->isUnit,
            'NotExists' => $this->notExists,
            'ID_EventType' => $this->idEventType,
            'ID_EventEducationType' => $this->idEventEducationType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
