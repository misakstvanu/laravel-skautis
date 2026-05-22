<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class TransportAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?bool $addNoTransport = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'AddNoTransport' => $this->addNoTransport,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
