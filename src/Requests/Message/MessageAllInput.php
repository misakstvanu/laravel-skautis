<?php

namespace Misakstvanu\LaravelSkautis\Requests\Message;

final class MessageAllInput
{
    public function __construct(
        public readonly ?string $instanceKey = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'InstanceKey' => $this->instanceKey,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
