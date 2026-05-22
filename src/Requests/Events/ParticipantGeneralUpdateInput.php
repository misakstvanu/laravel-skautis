<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantGeneralUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idParticipant = null,
        public readonly ?int $days = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Participant' => $this->idParticipant,
            'Days' => $this->days,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
