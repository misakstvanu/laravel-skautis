<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventTypeAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $idTable = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_Table' => $this->idTable,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
