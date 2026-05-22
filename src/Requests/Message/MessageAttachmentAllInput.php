<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageAttachmentAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idMessage = null,
        public readonly ?bool $isHtmlImage = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Message' => $this->idMessage,
            'IsHtmlImage' => $this->isHtmlImage,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
