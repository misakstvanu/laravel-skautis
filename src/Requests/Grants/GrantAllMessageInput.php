<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAllMessageInput
{
    public function __construct(
        public readonly ?int $idMessage = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Message' => $this->idMessage,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
