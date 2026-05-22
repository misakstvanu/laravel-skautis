<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageAllWebInput
{
    public function __construct(
        public readonly ?string $idMessageType = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idMessageGroup = null,
        public readonly ?bool $isRead = null,
        public readonly ?bool $hasAttachments = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $dateCreateFrom = null,
        public readonly ?string $dateCreateTo = null,
        public readonly ?int $top = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_MessageType' => $this->idMessageType,
            'DisplayName' => $this->displayName,
            'ID_MessageGroup' => $this->idMessageGroup,
            'IsRead' => $this->isRead,
            'HasAttachments' => $this->hasAttachments,
            'IsActive' => $this->isActive,
            'DateCreateFrom' => $this->dateCreateFrom,
            'DateCreateTo' => $this->dateCreateTo,
            'Top' => $this->top,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
