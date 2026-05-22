<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class DelegateAllInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idParticipant = null,
        public readonly ?int $idCandidate = null,
        public readonly ?string $idDelegateState = null,
        public readonly ?string $person = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?bool $isCandidate = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            'ID_Participant' => $this->idParticipant,
            'ID_Candidate' => $this->idCandidate,
            'ID_DelegateState' => $this->idDelegateState,
            'Person' => $this->person,
            'RegistrationNumber' => $this->registrationNumber,
            'IsCandidate' => $this->isCandidate,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
