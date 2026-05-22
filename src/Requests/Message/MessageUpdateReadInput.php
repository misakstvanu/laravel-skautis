<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageUpdateReadInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isRead = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'IsRead' => $this->isRead,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
