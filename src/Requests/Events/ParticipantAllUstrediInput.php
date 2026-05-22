<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantAllUstrediInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
        public readonly ?string $idParticipantType = null,
        public readonly ?string $person = null,
        public readonly ?bool $hasPreference = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            'ID_ParticipantType' => $this->idParticipantType,
            'Person' => $this->person,
            'HasPreference' => $this->hasPreference,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
