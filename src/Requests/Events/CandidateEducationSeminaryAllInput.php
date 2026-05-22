<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CandidateEducationSeminaryAllInput
{
    public function __construct(
        public readonly ?int $idCandidate = null,
        public readonly ?int $idEducationSeminary = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Candidate' => $this->idCandidate,
            'ID_EducationSeminary' => $this->idEducationSeminary,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
