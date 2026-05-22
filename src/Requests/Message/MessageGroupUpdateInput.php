<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageGroupUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $replyTo = null,
        public readonly ?string $footer = null,
        public readonly ?string $footerHtml = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ReplyTo' => $this->replyTo,
            'Footer' => $this->footer,
            'FooterHtml' => $this->footerHtml,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
