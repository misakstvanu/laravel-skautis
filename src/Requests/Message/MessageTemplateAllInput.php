<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageTemplateAllInput
{
    public function __construct(
        public readonly ?string $idMessageType = null,
        public readonly ?string $idMessageMedium = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_MessageType' => $this->idMessageType,
            'ID_MessageMedium' => $this->idMessageMedium,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
