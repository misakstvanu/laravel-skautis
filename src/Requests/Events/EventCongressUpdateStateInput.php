<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressUpdateStateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idEventCongressState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventCongressState' => $this->idEventCongressState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
