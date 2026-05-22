<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CandidateAllNameInput
{
    public function __construct(
        public readonly ?int $idEventCongressFunction = null,
        public readonly ?int $idCandidate = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongressFunction' => $this->idEventCongressFunction,
            'ID_Candidate' => $this->idCandidate,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
