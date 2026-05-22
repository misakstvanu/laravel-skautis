<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CandidateDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $convertToRtf = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ConvertToRtf' => $this->convertToRtf,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
