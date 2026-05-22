<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageGroupAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $replyTo = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ReplyTo' => $this->replyTo,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
