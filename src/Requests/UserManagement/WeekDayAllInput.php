<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class WeekDayAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
