<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageTypeUpdateInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idMessageGroup = null,
        public readonly ?string $messageGroup = null,
        public readonly ?string $procedure = null,
        public readonly ?bool $allwaysEmail = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_MessageGroup' => $this->idMessageGroup,
            'MessageGroup' => $this->messageGroup,
            'Procedure' => $this->procedure,
            'AllwaysEmail' => $this->allwaysEmail,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
