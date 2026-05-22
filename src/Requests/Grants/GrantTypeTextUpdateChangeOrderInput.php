<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantTypeTextUpdateChangeOrderInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $direction = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Direction' => $this->direction,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
