<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopyUpdateSendMessageInput
{
    public function __construct(
        public readonly ?string $dateSent = null,
        public readonly ?bool $sendMessage = null,
        public readonly ?bool $orderVIP = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DateSent' => $this->dateSent,
            'SendMessage' => $this->sendMessage,
            'OrderVIP' => $this->orderVIP,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
