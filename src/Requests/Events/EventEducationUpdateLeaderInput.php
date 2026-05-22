<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationUpdateLeaderInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPersonLeader = null,
        public readonly ?string $leaderNote = null,
        public readonly ?int $idPersonSecretary = null,
        public readonly ?string $secretaryNote = null,
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
            'ID_PersonSecretary' => $this->idPersonSecretary,
            'SecretaryNote' => $this->secretaryNote,
            'ID_PersonEconomist' => $this->idPersonEconomist,
            'EconomistNote' => $this->economistNote,
            'ID_PersonMedic' => $this->idPersonMedic,
            'MedicNote' => $this->medicNote,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
