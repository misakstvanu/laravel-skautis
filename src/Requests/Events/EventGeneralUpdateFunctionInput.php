<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventGeneralUpdateFunctionInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPersonLeader = null,
        public readonly ?string $leaderNote = null,
        public readonly ?int $idPersonAssistant = null,
        public readonly ?string $assistantNote = null,
        public readonly ?int $idPersonEconomist = null,
        public readonly ?string $economistNote = null,
        public readonly ?int $idPersonMedic = null,
        public readonly ?string $medicNote = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_PersonLeader' => $this->idPersonLeader,
            'LeaderNote' => $this->leaderNote,
            'ID_PersonAssistant' => $this->idPersonAssistant,
            'AssistantNote' => $this->assistantNote,
            'ID_PersonEconomist' => $this->idPersonEconomist,
            'EconomistNote' => $this->economistNote,
            'ID_PersonMedic' => $this->idPersonMedic,
            'MedicNote' => $this->medicNote,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
