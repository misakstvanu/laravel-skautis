<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventStatisticUpdateEventGeneralInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $count = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Count' => $this->count,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
