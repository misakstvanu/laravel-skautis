<?php

namespace Misakstvanu\LaravelSkautis\Requests\Journal;

final class JournalCopyUpdateGenerateInput
{
    public function __construct(
        public readonly ?string $dateSent = null,
        public readonly ?bool $createOrder = null,
        public readonly ?bool $orderVIP = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DateSent' => $this->dateSent,
            'CreateOrder' => $this->createOrder,
            'OrderVIP' => $this->orderVIP,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
