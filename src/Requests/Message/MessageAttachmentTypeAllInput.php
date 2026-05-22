<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageAttachmentTypeAllInput
{
    public function __construct(
        public readonly ?string $idMessageType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_MessageType' => $this->idMessageType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
