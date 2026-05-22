<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageVariableAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $idMessageType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_MessageType' => $this->idMessageType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
