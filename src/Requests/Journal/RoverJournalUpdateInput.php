<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class RoverJournalUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idRoverJournalType = null,
        public readonly ?string $roverJournalType = null,
        public readonly ?string $dateCreated = null,
        public readonly ?int $idRoverJournalYear = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_RoverJournalType' => $this->idRoverJournalType,
            'RoverJournalType' => $this->roverJournalType,
            'DateCreated' => $this->dateCreated,
            'ID_RoverJournalYear' => $this->idRoverJournalYear,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
