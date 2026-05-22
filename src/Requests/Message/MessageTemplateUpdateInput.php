<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageTemplateUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idMessageType = null,
        public readonly ?string $messageType = null,
        public readonly ?string $idMessageMedium = null,
        public readonly ?string $messageMedium = null,
        public readonly ?string $displayName = null,
        public readonly ?string $body = null,
        public readonly ?bool $isAttachmentVisible = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_MessageType' => $this->idMessageType,
            'MessageType' => $this->messageType,
            'ID_MessageMedium' => $this->idMessageMedium,
            'MessageMedium' => $this->messageMedium,
            'DisplayName' => $this->displayName,
            'Body' => $this->body,
            'IsAttachmentVisible' => $this->isAttachmentVisible,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
