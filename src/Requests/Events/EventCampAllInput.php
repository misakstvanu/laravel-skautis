<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idEventCampState = null,
        public readonly ?bool $isFuture = null,
        public readonly ?bool $started = null,
        public readonly ?int $year = null,
        public readonly ?bool $isRelation = null,
        public readonly ?bool $isChildDirect = null,
        public readonly ?bool $isChildUnit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $location = null,
        public readonly ?bool $forEvaluation = null,
        public readonly ?bool $isKraj = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_Unit' => $this->idUnit,
            'ID_EventCampState' => $this->idEventCampState,
            'IsFuture' => $this->isFuture,
            'Started' => $this->started,
            'Year' => $this->year,
            'IsRelation' => $this->isRelation,
            'IsChildDirect' => $this->isChildDirect,
            'IsChildUnit' => $this->isChildUnit,
            'RegistrationNumber' => $this->registrationNumber,
            'Location' => $this->location,
            'ForEvaluation' => $this->forEvaluation,
            'IsKraj' => $this->isKraj,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
