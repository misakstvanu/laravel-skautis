<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class DelegateUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idParticipant = null,
        public readonly ?int $idCandidate = null,
        public readonly ?string $idDelegateState = null,
        public readonly ?string $delegateState = null,
        public readonly ?string $cancelDescription = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?string $eventCongress = null,
        public readonly ?int $idParticipantEducation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Participant' => $this->idParticipant,
            'ID_Candidate' => $this->idCandidate,
            'ID_DelegateState' => $this->idDelegateState,
            'DelegateState' => $this->delegateState,
            'CancelDescription' => $this->cancelDescription,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_EventCongress' => $this->idEventCongress,
            'EventCongress' => $this->eventCongress,
            'ID_ParticipantEducation' => $this->idParticipantEducation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
