<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class HolidayDetailNotHolidayInput
{
    public function __construct(
        public readonly ?string $date = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Date' => $this->date,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
