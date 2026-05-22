<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampStatisticUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?bool $isEstimate = null,
        public readonly ?int $benjaminci = null,
        public readonly ?int $vlce = null,
        public readonly ?int $svetluska = null,
        public readonly ?int $skaut = null,
        public readonly ?int $skautka = null,
        public readonly ?int $rover = null,
        public readonly ?int $ranger = null,
        public readonly ?int $adultFemale = null,
        public readonly ?int $adultMale = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventCamp' => $this->idEventCamp,
            'IsEstimate' => $this->isEstimate,
            'Benjaminci' => $this->benjaminci,
            'Vlce' => $this->vlce,
            'Svetluska' => $this->svetluska,
            'Skaut' => $this->skaut,
            'Skautka' => $this->skautka,
            'Rover' => $this->rover,
            'Ranger' => $this->ranger,
            'AdultFemale' => $this->adultFemale,
            'AdultMale' => $this->adultMale,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
