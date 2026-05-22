<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CandidateUpdateStateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idCandidateState = null,
        public readonly ?string $stateDecision = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_CandidateState' => $this->idCandidateState,
            'StateDecision' => $this->stateDecision,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
