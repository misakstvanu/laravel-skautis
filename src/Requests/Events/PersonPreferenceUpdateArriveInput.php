<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class PersonPreferenceUpdateArriveInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $eventCongress = null,
        public readonly ?string $person = null,
        public readonly ?string $arrive = null,
        public readonly ?bool $noArrive = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            'ID_Person' => $this->idPerson,
            'EventCongress' => $this->eventCongress,
            'Person' => $this->person,
            'Arrive' => $this->arrive,
            'NoArrive' => $this->noArrive,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
