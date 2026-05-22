<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idMessageState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_MessageState' => $this->idMessageState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
