<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageTypeAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $key = null,
        public readonly ?int $idMessageGroup = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'Key' => $this->key,
            'ID_MessageGroup' => $this->idMessageGroup,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
