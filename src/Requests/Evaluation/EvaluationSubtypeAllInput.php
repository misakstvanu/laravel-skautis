<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationSubtypeAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $idEventType = null,
        public readonly ?int $idEvaluationVersion = null,
        public readonly ?bool $isEvent = null,
        public readonly ?bool $isPublished = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_UnitType' => $this->idUnitType,
            'ID_EventType' => $this->idEventType,
            'ID_EvaluationVersion' => $this->idEvaluationVersion,
            'IsEvent' => $this->isEvent,
            'IsPublished' => $this->isPublished,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
