<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CandidateUpdateVoteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $votesCount = null,
        public readonly ?bool $isElected = null,
        public readonly ?int $orderIncrease = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'VotesCount' => $this->votesCount,
            'IsElected' => $this->isElected,
            'OrderIncrease' => $this->orderIncrease,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
