<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class PersonPreferenceUpdateDepartureInput
{
    public function __construct(
        public readonly ?string $eventCongress = null,
        public readonly ?string $person = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $departure = null,
        public readonly ?bool $noDeparture = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'EventCongress' => $this->eventCongress,
            'Person' => $this->person,
            'ID_EventCongress' => $this->idEventCongress,
            'ID_Person' => $this->idPerson,
            'Departure' => $this->departure,
            'NoDeparture' => $this->noDeparture,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
