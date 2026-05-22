<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageToSentInput
{
    public function __construct(
        public readonly ?string $error = null,
        public readonly ?int $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Error' => $this->error,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
