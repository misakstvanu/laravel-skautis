<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class SharedDriveDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isComplete = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'IsComplete' => $this->isComplete,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
