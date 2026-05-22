<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationSubtypeUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
        public readonly ?string $idEventType = null,
        public readonly ?string $eventType = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?string $description = null,
        public readonly ?string $note = null,
        public readonly ?int $idEvaluationVersion = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_UnitType' => $this->idUnitType,
            'UnitType' => $this->unitType,
            'ID_EventType' => $this->idEventType,
            'EventType' => $this->eventType,
            'ID_EventEducationType' => $this->idEventEducationType,
            'EventEducationType' => $this->eventEducationType,
            'Description' => $this->description,
            'Note' => $this->note,
            'ID_EvaluationVersion' => $this->idEvaluationVersion,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
