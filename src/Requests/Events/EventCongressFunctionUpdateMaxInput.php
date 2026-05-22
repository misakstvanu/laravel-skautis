<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressFunctionUpdateMaxInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?string $eventCongress = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idUnitType = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
        public readonly ?bool $isCandidateWith = null,
        public readonly ?string $idEventCongressState = null,
        public readonly ?bool $hasPassed = null,
        public readonly ?int $maxCount = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_EventCongress' => $this->idEventCongress,
            'EventCongress' => $this->eventCongress,
            'ID_Unit' => $this->idUnit,
            'ID_UnitType' => $this->idUnitType,
            'ID_FunctionType' => $this->idFunctionType,
            'FunctionType' => $this->functionType,
            'IsCandidateWith' => $this->isCandidateWith,
            'ID_EventCongressState' => $this->idEventCongressState,
            'HasPassed' => $this->hasPassed,
            'MaxCount' => $this->maxCount,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
