<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class PersonPreferenceUpdateTransportInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idTransport = null,
        public readonly ?string $transport = null,
        public readonly ?bool $noTransport = null,
        public readonly ?string $eventCongress = null,
        public readonly ?string $person = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            'ID_Person' => $this->idPerson,
            'ID_Transport' => $this->idTransport,
            'Transport' => $this->transport,
            'NoTransport' => $this->noTransport,
            'EventCongress' => $this->eventCongress,
            'Person' => $this->person,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
