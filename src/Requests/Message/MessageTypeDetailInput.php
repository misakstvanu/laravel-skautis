<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageTypeDetailInput
{
    public function __construct(
        public readonly ?string $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
