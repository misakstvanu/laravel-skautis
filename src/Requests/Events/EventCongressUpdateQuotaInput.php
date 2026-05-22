<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressUpdateQuotaInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $delegateQuota = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DelegateQuota' => $this->delegateQuota,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
