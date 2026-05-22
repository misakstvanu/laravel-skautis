<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CandidateFunctionAllInput
{
    public function __construct(
        public readonly ?int $idCandidate = null,
        public readonly ?int $idFunction = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Candidate' => $this->idCandidate,
            'ID_Function' => $this->idFunction,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
