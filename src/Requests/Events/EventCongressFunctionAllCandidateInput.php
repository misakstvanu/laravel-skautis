<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressFunctionAllCandidateInput
{
    public function __construct(
        public readonly ?bool $onlyMyUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'OnlyMyUnit' => $this->onlyMyUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
