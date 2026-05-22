<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventQuestionUpdateOrderInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $orderIncrease = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'OrderIncrease' => $this->orderIncrease,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
