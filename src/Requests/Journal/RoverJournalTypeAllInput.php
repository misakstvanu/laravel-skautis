<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class RoverJournalTypeAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
