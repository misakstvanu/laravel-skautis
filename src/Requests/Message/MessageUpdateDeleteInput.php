<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageUpdateDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $delete = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Delete' => $this->delete,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
