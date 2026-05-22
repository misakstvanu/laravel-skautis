<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CandidateMemberAllInput
{
    public function __construct(
        public readonly ?int $idCandidate = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Candidate' => $this->idCandidate,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
