<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationProjectFinalCheckInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $showValid = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ShowValid' => $this->showValid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
