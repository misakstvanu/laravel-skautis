<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampCityAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
